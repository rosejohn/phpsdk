<?php

use Dpd\Sdk\API;

class ParcelTest extends PHPUnit_Framework_TestCase {

    public function testgenerateParcel()
    {
        $api = new API;
        $this->assertTrue($numbers = $api->generateParcel(Dpd\Sdk\Form\ParcelGeneration::newInstance()
		->setUsername('demo')
		->setPassword('o2Ijwe2')
		->setName1('And')
		->setStreet('Kesmark u 4')
		->setCity('Budapest')
		->setCountry('HU')
		->setPcode('1158')
		->setWeight('1')
		->setNumOfParcel(1)
		->setParcelType('D')
));
    }

}


