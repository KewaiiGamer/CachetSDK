<?php
/**
 * This file is part of the Damianopetrungaro\CachetSDK package.
 * @author Damiano Petrungaro <damianopetrungaro@gmail.it>
 */

namespace Damianopetrungaro\CachetSDKTest\Unit;

use Damianopetrungaro\CachetSDK\General\GeneralFactory;
use Damianopetrungaro\CachetSDKTest\ClientFactory;

class GoodClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Should return an array with data key as "Pong!".
     */
    public function testGoodClient()
    {
        $client = ClientFactory::goodClient();
        $generalFactory = GeneralFactory::build($client);
        $this->assertEquals($generalFactory->ping(), ['data' => 'Pong!']);
    }

    /**
     * Should return a CachetSDKConnectException.
     *
     * @expectedException \Damianopetrungaro\CachetSDK\Exceptions\CachetSDKConnectException
     */
    public function testBadClient()
    {
        $client = ClientFactory::badClient();
        $generalFactory = GeneralFactory::build($client);
        $generalFactory->ping();
    }
}
