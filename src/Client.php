<?php

namespace WillWashburn\Camo;

use Exception;

/**
 * A PHP client for Camo - the SSL image proxy
 *
 * For more information about setting up Camo, please see
 * https://github.com/atmos/camo
 *
 * @package WillWashburn\Camo
 */
class Client
{
    /**
     * @var string $camoKey The shared key used to generate the HMAC digest
     *
     */
    protected $camoKey;

    /**
     * @var string $domain The domain where camo is hosted.
     */
    protected $domain;

    /**
     * Returns a SSL proxy url for a given url
     *
     * @param $url
     *
     * @throws \Exception
     * @return string
     */
    public function proxy($url)
    {
        $this->runSanityChecks();

        $digest = $this->getDigest($url);
        $hex    = bin2hex($url);

        return "https://$this->domain/$digest/$hex/";
    }

    /**
     * @param string $key The shared key used to generate the HMAC digest.
     */
    public function setCamoKey($key)
    {
        $this->camoKey = $key;
    }

    /**
     * @param $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @param $url
     *
     * @return string
     */
    protected function getDigest($url)
    {
        return hash_hmac('sha1', $url, $this->camoKey);
    }

    /**
     * @throws \Exception
     */
    private function runSanityChecks()
    {
        if ( empty($this->camoKey) ) {
            throw new Exception('Aww man. The CAMO KEY is missing.');
        }

        if ( empty($this->domain) ) {
            throw new Exception('Sorry but you need to add the domain.');
        }
    }
}