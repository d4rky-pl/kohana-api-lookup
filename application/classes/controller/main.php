<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Base_Controller {

	public function action_index()
	{
		$view = Haml::Factory('main/index');

		if(Arr::Get($_GET, 'term') !== NULL)
		{
			return $this->response->body($this->_ajax());
		}

		if($lookup = $this->_parse_get())
		{
			$type = strtolower(str_replace("Model_", "", get_class($lookup)));

			// Won't work in IE but.. who cares?
			if($this->request->is_ajax() === TRUE)
			{
				$this->render_template = FALSE;
				return $this->response->body(Haml::Factory('fragments/main/'.$type, array($type => $lookup)));
			}
			else
			{
				$this->template->title = $lookup->name;
				$view->set(array('active_'.$type => $lookup, 'content' => $lookup->content));
			}
		}

		$this->response->body($view->render());
	}

	public function _parse_get()
	{
		if(!empty($_GET['query']))
		{
			$object = array();
			if(stripos($_GET['query'], "::"))
			{
				$lookup = ORM::Factory('method')->where('lookup','=',$_GET['query'])->find();
			}
			else
			{
				$lookup = ORM::Factory('class')->where('name','=',$_GET['query'])->find();
			}

			return $lookup;
		}

		return FALSE;
	}

	public function _ajax()
	{
		$classes = DB::select('name')->from('classes')->where('name','LIKE','%'.$_GET['term'].'%');
		$methods = DB::select(array('lookup', 'name'))->from('methods')->where('lookup','LIKE','%'.$_GET['term'].'%');
		$results = $classes->union($methods)->execute()->as_array('name','name');

		$this->response->headers('Content-type', 'application/json');
		$this->render_template = FALSE;

		return json_encode(array_values($results));
	}

} // End Welcome
