<?php defined('SYSPATH') OR die('No direct script access.'); 

/**
 * Debug curl requests
 *
 * Use this class as a decorator for the Curl class:
 * 
 * $curl = Curl::factory();
 * if (Kohana::$environment !== Kohana::PRODUCTION)
 * {
 *     $curl = new Curl_Debugger($curl);
 * }
 * $curl->set_opt(CURLOPT_URL, $url);
 * $curl->execute();
 * 
 * All debugging information will be logged with Kohana::$log.
 * 
 * TODO:
 *  - Add support for static methods get() and post()
 */
class Curl_Debugger
{
	
	protected $curl = NULL;
	
	public function __construct(Kohana_Curl $curl)
	{
		$this->curl = $curl;
	}
	
	public function execute()
	{
		$result = $this->curl->execute();
		try
		{
			$this->log_request_info($this->curl->get_info());
		}
		catch (Exception $e)
		{
			Kohana::$log->add(Log::ERROR, 'Could not log curl info: ' . $e->getMessage());
		}
		return $result;
	}
	
	public function set_opt($key, $value)
	{
		$message = sprintf('CURL: Setting option %s=%s', $key, $value);
		Kohana::$log->add(Log::DEBUG, $message);
		$this->curl->set_opt($key, $value);
		return $this;
	}
	
	public function set_opts($options)
	{
		foreach ($options as $key => &$value)
		{
			$this->set_opt($key, $value);
		}
		return $this;
	}
	
	public function get_error()
	{
		return $this->curl->get_error();
	}
	
	protected function log_request_info(array $info)
	{
		foreach ($info as $key => &$value)
		{
			$message = sprintf('CURL: %s: %s', $key, $value);
			Kohana::$log->add(Log::DEBUG, $message);
		}
	}
	
}