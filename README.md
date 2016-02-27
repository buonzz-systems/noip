PHP Client for Integrating to NoIP.com
======================================

Library to update the DDNS hostname to a specific IP.

see [http://www.noip.com/integrate/request](http://www.noip.com/integrate/request)

## Installation

Install via Composer

```
composer require buonzz/noip
```

Instantiate Client and set IP


```
use Buonzz\NoIP\Client;

$client = new Buonzz\NoIP\Client();

$result = $client->update("1.1.1.1");

if($result == 'OK')
  // the ddns host is successfully updated
```


