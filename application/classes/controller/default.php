<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller {

	public function action_index()
	{
		$this->response->body(View::Factory('default'));
	}

} // End Welcome
