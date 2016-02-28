PHP Client for Integrating to NoIP.com
======================================

Library to update the DDNS hostname to a specific IP.

see [http://www.noip.com/integrate/request](http://www.noip.com/integrate/request)

## Installation



### Install via Composer in a Project

```
composer require buonzz/noip
```

Create the configuration file with filename .env
```
vi .env
```

The config file should contain this variables that you need to set

* NOIP_HOST - is your NoIP Hostname, (e.g. myhostname.ddns.net )
* NOIP_USERNAME - your account username
* NOIP_PASSWORD - your password


Remember to not commit the .env file to your git repository! These variables is automatically loaded by app as environment variable. This is a security feature so that your credentials is not hardcoded in your application source codes.


Instantiate Client and set IP


```
use Buonzz\NoIP\Client;

$client = new Buonzz\NoIP\Client();

$result = $client->update("1.1.1.1");

if($result == 'OK')
  // the ddns host is successfully updated
```


### Install it as CLI script


You can install it globally in your machine:

```
composer global require buonzz/noip
```

Simply add this directory to your PATH in your ~/.bash_profile (and/or ~/.bashrc) like this:

```
export PATH=~/.composer/vendor/bin:$PATH
```

load the current config

```
source ~/.bash_profile
```


Set the .env file in 

~/.env folder

```
vi ~/.env
```

(look at the above section for configuring projects to know what vars is required )

Now you are ready to run the script

```
noip_php client:update
```