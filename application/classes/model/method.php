<?php class Model_Method extends ORM {

	protected $_belongs_to = array('class' => array());

	public function __get($variable)
	{
		$return = parent::__get($variable);
		if($variable == 'content')
		{
			$return = str_replace("\t","    ",$return);
			$return = preg_replace_callback(
				'@a href="(.+?)"@',
				function($link)
				{
					// URL Rewriter

					$url = Kohana::$config->load('api_lookup');

					if(preg_match("@^(http|ftp)@", $link[1]))
					{
						return 'a href="'.$link[1].'"';
					}
					elseif(preg_match("@^/@", $link[1]))
					{
						return 'a href="'.$url['base_url'].'/'.ltrim($link[1], '/').'"';
					}
					else
					{
						return 'a href="'.$url['base_url'].$url['guide_url'].'/'.ltrim($link[1], '/').'"';

					}
				}, $return);
		}
		return $return;
	}


}
