<?php

chdir(__DIR__);
include ('../vendor/autoload.php');

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
                'https://www.example.com/3608e93ba99430a7fb28344e910330004ad51b84/687474703a2f2f34302e6d656469612e74756d626c722e636f6d2f34353734646530396531323037646262383732663963303138616462353763382f74756d626c725f6e67796131685955424f31727139656b326f315f313238302e6a7067/'
            )

        );
    }

}