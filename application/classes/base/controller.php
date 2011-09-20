<?php class Base_Controller extends Controller
{
	protected
	          $template        = 'templates/default',
	          $render_template = TRUE;

	public function before()
	{
		$this->template = Haml::factory($this->template);
	}

	public function after()
	{
		if($this->render_template === TRUE)
		{
			$this->template->set('content', $this->response->body());
			$this->response->body($this->template->render());
		}
	}
}
