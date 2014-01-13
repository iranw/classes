<?php namespace Classes;

use SoapClient;

class Mailclient
{
	var $serverpath;
		
	function __construct($_serverpath)
	{
		$this->serverpath = $_serverpath;		
	}
	
	function test()
	{
		$client = new SoapClient(null, array('location' => $this->serverpath,
												 'uri' => "http://test-uri/"));	
		echo $client->test();
	}
	

	function sendmail($mails="")
	{	
			$client = new SoapClient(null, array('location' => $this->serverpath,'uri' => "http://test-uri/"));			
			
		//	$result = $client->send($mails);	
			if ( $client->send($mails) )
			{
				return 1;		
			}
			else 
			{
				return 0;
			}	
	}	

}

?>
