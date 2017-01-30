<?php

use WillWashburn\Phpamo\Encoder\QueryStringEncoder;
use WillWashburn\Phpamo\Formatter\QueryStringFormatter;

chdir(__DIR__);
include ('../vendor/autoload.php');

/**
 * @group proxy-url
 */
class ProxyUrlTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider hexlinksProvider
     *
     * @param $original
     * @param $proxy
     */
    public function test_hex_camo_url_returns_correct_link($original, $proxy)
    {
        $phpamo = new \WillWashburn\Phpamo\Phpamo(
           'somekeythatisuniqueandstufflikethat',
           'www.example.com'
        );

        $this->assertEquals($phpamo->camo($original),$proxy);
    }

    /**
     * @return array
     */
    public function hexlinksProvider()
    {
        return array (
            array(
                'http://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
                'https://www.example.com/3608e93ba99430a7fb28344e910330004ad51b84/687474703a2f2f34302e6d656469612e74756d626c722e636f6d2f34353734646530396531323037646262383732663963303138616462353763382f74756d626c725f6e67796131685955424f31727139656b326f315f313238302e6a7067/'
            )

        );
    }


    /**
     * @dataProvider linksProvider
     *
     * @param $original
     * @param $proxy
     */
    public function test_query_camo_url_returns_correct_link($original, $proxy)
    {
        $phpamo = new \WillWashburn\Phpamo\Phpamo(
            'somekeythatisuniqueandstufflikethat',
            'www.example.com',
            new QueryStringFormatter(new QueryStringEncoder())
        );

        $this->assertEquals($phpamo->camo($original),$proxy);
    }

    /**
     * @return array
     */
    public function linksProvider()
    {
        return array (
            array(
                'http://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
                'https://www.example.com/3608e93ba99430a7fb28344e910330004ad51b84?url=http%3A%2F%2F40.media.tumblr.com%2F4574de09e1207dbb872f9c018adb57c8%2Ftumblr_ngya1hYUBO1rq9ek2o1_1280.jpg'
            )

        );
    }

    public function test_http_only_works() {

        $http =
            array(
                'http://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
                'https://www.example.com/3608e93ba99430a7fb28344e910330004ad51b84/687474703a2f2f34302e6d656469612e74756d626c722e636f6d2f34353734646530396531323037646262383732663963303138616462353763382f74756d626c725f6e67796131685955424f31727139656b326f315f313238302e6a7067/',
            );

        $https =
            array(
                'https://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
                'https://40.media.tumblr.com/4574de09e1207dbb872f9c018adb57c8/tumblr_ngya1hYUBO1rq9ek2o1_1280.jpg',
            );


        $phpamo = new \WillWashburn\Phpamo\Phpamo(
            'somekeythatisuniqueandstufflikethat',
            'www.example.com'
        );

        $this->assertEquals($phpamo->camoHttpOnly($http[0]),$http[1]);
        $this->assertEquals($phpamo->camoHttpOnly($https[0]),$https[1]);
    }

    public function test_key_sanity_checks() {

        $this->setExpectedException('Exception');

        $phpamo = new \WillWashburn\Phpamo\Phpamo(null, null);

    }


    public function test_domain_sanity_checks() {

        $this->setExpectedException('Exception');

        $phpamo = new \WillWashburn\Phpamo\Phpamo('somekeythatisuniquneandstufflikethat', null);
    }

}