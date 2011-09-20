<?php
class Controller_Search extends Controller
{
	public function action_index()
	{
		if(!empty($_POST['query']))
		{
			$method = ORM::Factory('method', $_POST['query']);
			$this->response->body(str_replace("\t", "    ", $method->content));
		}
		else
		{
			$this->response->body('error?');
		}
	}

	public function action_ajax()
	{
		if(!$input = Arr::Get($_GET, 'q'))
		{
			throw new HTTP_Exception_500;
		}

		$lookup = DB::Select()->from('methods')->where('lookup','LIKE','%'.$input.'%')->as_object()->execute();

		$search = array();
		foreach($lookup as $row)
		{
			if($row->id)
			{
				$search[] = array('value' => $row->lookup, 'id' => $row->id);
			}
		}
		$this->response->headers('Content-type','application/json');
		$this->response->body(json_encode($search));
	}
}
