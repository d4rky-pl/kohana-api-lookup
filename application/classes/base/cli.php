<?php class Controller_CLI extends Controller
{
	public function before()
	{
		if(Kohana::$is_cli !== TRUE)
		{
			throw new HTTP_Exception_403;
		}

		ob_end_clean();
	}
}
