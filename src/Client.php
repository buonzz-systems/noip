<?php namespace Buonzz\NoIP;

use GuzzleHttp\Client as GClient;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class Client{
  
  private $api_host;
  private $use_https;
  private $username;
  private $password;

  private $api_url;

  public function __construct($host, $username, $password, $use_https = true){
  
    $this->api_host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->use_https = $use_https;
    
    if($use_https)
      $this->api_url = "https";
    else
      $this->api_url = "http";

    $this->api_url .= "://$this->username:$this->password@dynupdate.no-ip.com/nic/update";  
  
  }

  public function update($hostname, $ip){
    
    $uri = $this ->api_url ."?hostname=" . $hostname . "&myip=" . $ip;

    $client = new GClient(['headers' => ['User-Agent' => 'Buonzz Update Client PHP/v1.0 buonzz@gmail.com']]);
    
    $output = "";
    
    try{
      
      $response = $client->request('GET', $uri);
      
      $code = $response->getStatusCode(); // 200
      $reason = $response->getReasonPhrase(); // OK
      return $reason;  
    }
    catch (ClientException $e) {
        return $e->getResponse();
    }

  } /* update method */

}