<?php

namespace EXS\PhpUserAgentBundle\Services;

class PhpUserAgentService
{
    /**
     * The platform extracted from the user agent
     * @var string 
     */
	protected $platform = null;
    
    /**
     * The name of the browser extracted from the user agent
     * @var string
     */
	protected $browser  = null;
    
    /**
     * The version of the browser
     * @var string 
     */
	protected $version  = null;

    /**
     * Simple wrapper for the parse_user_agent script
     * @param type $userAgent
     */
    public function parseUserAgent($userAgent = null)
    {
        $result = \parse_user_agent($userAgent);

        $this->platform = $result['platform'];
        $this->browser = $result['browser'];
        $this->version = $result['version'];
    }
    
    public function getPlatform()
    {
        return $this->platform;
    }

    public function getBrowser()
    {
        return $this->browser;
    }

    public function getVersion()
    {
        return $this->version;
    }
}
