<?php

class RoutesTest extends TestCase
{
	public function testGetEvents(){
		$this->call('GET', 'api/events');
		$this->assertResponseOk();
	}
}
?>