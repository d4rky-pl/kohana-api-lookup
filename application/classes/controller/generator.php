<?php 
class Controller_Generator extends Controller
{
	protected $_base_url    = 'http://kohanaframework.org',
	          $_guide_index = '/3.2/guide/api';

	public function before()
	{
		if(Kohana::$is_cli !== TRUE)
		{
			throw new HTTP_Exception_403;
		}

		ob_end_clean();
	}

	public function action_index()
	{
		echo "Fetching API classes list.\n";
		$api_list = Curl::get($this->_base_url.$this->_guide_index);

		// We don't need DOM modification here yet
		// $classes[1] - links
		// $classes[2] - names
		preg_match_all('@<h2><a href="(.+?)">(.+?)</a></h2>@', $api_list, $classes);

		foreach($classes[2] as $id => $name)
		{
			$class = ORM::Factory('class');
			$class->name = $name;
			$class->save();

			echo "Fetching class: ".$name.".\n";

			$methods_list = Curl::get($this->_base_url.$classes[1][$id]);

			// unfortunately necessary because DOMDocument throws E_WARNING on imperfect markup
			// and Kohana stops execution of script after that happens
			error_reporting(E_ALL ^ E_WARNING);
			$doc = new DOMDocument();
			$doc->loadHTML($methods_list);
			$xpath = new DOMXPath($doc);

			foreach($xpath->query("//div[@class='method']") as $xp)
			{
				$content = trim(self::_dom_innerhtml($xp));
				preg_match("@<h3 id=\"(.+?)\">@is", $content, $name);
				$name = $name[1];

				echo " o- ".$name."\n";

				$method = ORM::Factory('method');
				$method->class_id = $class->id;
				$method->name = $name;
				$method->content = $content;
				$method->lookup = $class->name.'::'.$name;
				$method->save();
			}

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

}
