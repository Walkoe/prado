<?php

class Ticket246TestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$this->url('tickets/index.php?page=Ticket246');
		$this->assertEquals($this->title(), 'Verifying Ticket 246');
	}
}
