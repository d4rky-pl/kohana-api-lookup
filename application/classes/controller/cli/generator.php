<?php class Controller_CLI_Generator extends Base_CLI
{

	/*
	 * URL to your server hosting Userguide module
	 * You *really* want to put your own link in here.
	 */
	protected $_base_url    = 'http://kohanaframework.org';

	/*
	 * API documentation address relative to $_base_url
	 * You *really* want to put your own link in here.
	 */
	protected $_guide_index = '/3.2/guide/api';

	public function action_index()
	{
		// Check whetever someone is Doing It Wrong™
		if($this->_base_url == 'http://kohanaframework.org')
		{
			Minion_CLI::write("I have detected that you didn't change \$_base_url.");
			Minion_CLI::write("THIS. IS. WRONG", 'red');
			Minion_CLI::write("You're going to put a strain on already overcrowded and slow server. Every request you make is another dying kitten!");
			Minion_CLI::write("If you are sure you want to do this, type ".Minion_CLI::color('I AM A VERY EVIL PERSON', 'white', 'red').PHP_EOL);
			if(Minion_CLI::read() != 'I AM A VERY EVIL PERSON')
			{
				Minion_CLI::write('Thank you for saving all these kittens.'.PHP_EOL, 'green');
				exit(1);
			}
		}

		// Check whetever something is already in the DB
		if(ORM::Factory('class')->count_all() > 0)
		{
			Minion_CLI::write("There is already API documentation in your database. This script doesn't support appending.".PHP_EOL, 'red');
			if(Minion_CLI::read('Do you wish to clear your database?', array('y','n')) == 'y')
			{
				DB::query(NULL, 'TRUNCATE TABLE classes')->execute();
				DB::query(NULL, 'TRUNCATE TABLE methods')->execute();
			}
			else
			{
				Minion_CLI::write('Could not continue without cleaning DB first, aborting.'.PHP_EOL, 'red');
				exit(1);
			}

		}

		Minion_CLI::write("Fetching API classes list.", "green");

		$methods = $this->_list_api_links();

		foreach($methods as $class_name => $class_link)
		{
			$class = ORM::Factory('class');
			$class->name = $class_name;

			Minion_CLI::write("Class: ".$class->name, "light_blue");

			$methods_list = Curl::get($this->_base_url.$class_link);

			// unfortunately necessary because DOMDocument throws E_WARNING on imperfect markup
			// and Kohana stops execution of script after that happens

			// Yeah, I could've overwritten Kohana's error parser. Or use 3 lines of code. Sorry!
			$error_reporting = error_reporting();
			error_reporting(E_ALL ^ E_WARNING);

				$doc = new DOMDocument();
				$doc->loadHTML($methods_list);
				$xpath = new DOMXPath($doc);

			error_reporting($error_reporting);

			// looking for constants and properties
			foreach($xpath->query("//div[@class='constants'] | //div[@class='properties']") as $node)
			{
				// DAMN YOU DOMNodeList FOR IMPLEMENTING TRAVERSABLE WITHOUT ITERATOR
				if($node->getElementsByTagName('h1')->length > 0)
				{
					// Sorry sir, we caught the wrong guy
					continue;
				}

				$class->content .= trim(static::_dom_innerhtml($node));
			}

			$class->save();

			// looking for methods (DOMDocument doesn't implement getElementsByClassName)
			foreach($xpath->query("//div[@class='method']") as $node)
			{
				$content = trim(static::_dom_innerhtml($node));
				preg_match("@<h3 id=\"(.+?)\">@is", $content, $name);
				$name = $name[1];

				Minion_CLI::Write(" o- ".Minion_CLI::color($name, "yellow"), "light_blue");

				$method = ORM::Factory('method');
				$method->class_id = $class->id;
				$method->name = $name;
				$method->content = $content;
				$method->lookup = $class->name.'::'.$name;
				$method->save();
			}

			// New line to visually separate classes
			Minion_CLI::write("");
		}

	}

	public static function _dom_innerhtml($node)
	{
		// http://www.php.net/manual/en/class.domelement.php#101243
		$innerHTML= '';
		$children = $node->childNodes;
		foreach ($children as $child)
		{
			$innerHTML .= $child->ownerDocument->saveXML( $child );
		}

		return $innerHTML; 
	}

	public function _list_api_links()
	{
		$api_list = Curl::get($this->_base_url.$this->_guide_index);

		// We don't need DOM modification here yet
		preg_match_all('@<h2><a href="(.+?)">(.+?)</a></h2>@', $api_list, $classes);

		if(empty($classes))
		{
			throw new ErrorException("Could not find methods. You have either specified a wrong URL or the Userguide HTML format has changed.");
		}

		return array_combine($classes[2], $classes[1]);
	}

}
