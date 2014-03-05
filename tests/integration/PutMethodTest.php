<?php

use There4\Tests\SlimFrameworkTestCase;

class PutMethodTest extends SlimFrameworkTestCase
{
    public function testSayHello()
    {
        $parameters = array('name' => 'William Edwards');
        $this->put('/say-hello', $parameters, array('CONTENT_TYPE' => 'application/x-www-form-urlencoded'));
        $this->assertEquals(200, $this->response->status());
        $this->assertSame('Hello William Edwards', $this->response->body());
    }
}

/* End of file PutMethodTest.php */
