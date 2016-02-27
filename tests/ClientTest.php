<?php 


class ClientTest extends PHPUnit_Framework_TestCase{
	
  public function testIsThereAnySyntaxError(){
	
    $var = new Buonzz\NoIP\Client('bz-gateway.ddns.net', 'buonzz', 'DarwinBiler01');
  	$this->assertTrue(is_object($var));
  	unset($var);
  
  }

  public function testUpdate(){
  	$client = new Buonzz\NoIP\Client('XXXX', 'XXXX');
  	$this->assertEquals($client->update("XXXX", "XXXX"), 'OK');
  	unset($var);	
  }
  
}