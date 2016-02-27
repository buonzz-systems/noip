<?php 


class ClientTest extends PHPUnit_Framework_TestCase{
	
  public function testIsThereAnySyntaxError(){
	
    $var = new Buonzz\NoIP\Client;
  	$this->assertTrue(is_object($var));
  	unset($var);
  
  }
  
}