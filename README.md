# EXS-PhpUserAgentBundle
Wrapper for global function in https://github.com/donatj/PhpUserAgent/ 


## Installing the # EXS-PhpUserAgentBundle in a new Symfony2 project

Edit composer.json file with # EXS-PhpUserAgentBundle dependency:
``` js
//composer.json
//...
"require": {
    //other bundles
    "exs/php-user-agent-bundle": "^1.0"
},
```
Save the file and have composer update the project via the command line:
``` shell
composer update exs/php-user-agent-bundle"
```

Update the app/AppKernel.php
``` php
//app/AppKernel.php
//...
public function registerBundles()
{
    $bundles = array(
    //Other bundles
    new EXS\PhpUserAgentBundle\EXSPhpUserAgentBundle(),
);
```

## Usage

``` php
// initiate the service
$service = new EXS\PhpUserAgentBundle\Services\PhpUserAgentService();
$service->parseUserAgent(USER_AGENT_STRING_HERE);

// Get the detected platform type
$service->getFlatform();

// Get the detected browser type
$service->getBrowser();

// Get the detected browser version
$service->getVersion();
```

#### Contributing ####
Anyone and everyone is welcome to contribute.

If you have any questions or suggestions please [let us know][1].


[1]: http://www.ex-situ.com/
