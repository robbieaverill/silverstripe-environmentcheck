<?php

/**
 * @mixin PHPUnit_Framework_TestCase
 */
class DevCheckControllerTest extends SapphireTest
{
    protected $usesDatabase = true;
    
    public function testIndexCreatesChecker()
    {
        $controller = new DevCheckController();

        $request = new SS_HTTPRequest('GET', 'example.com');

        $this->assertInstanceOf('EnvironmentChecker', $controller->index($request));
    }
}
