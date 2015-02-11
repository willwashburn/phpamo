<?php

/**
 * @group proxy-url
 */
class ProxyUrlTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider linksProvider
     *
     * @param $original
     * @param $proxy
     */
    public function test_proxy_url_returns_correct_link($original, $proxy)
    {
        $camo = new WillWashburn\Camo\Client();
        $camo->setDomain('www.example.com');
        $camo->setCamoKey('somekeythatisuniqueandstufflikethat');

        $this->assertEquals($camo->proxy($original),$proxy);
    }

    /**
     * @return array
     */
    public function linksProvider()
    {
        return array (
            array(
                'http://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
                'https://www.example.com/'
            )

        );
    }

}