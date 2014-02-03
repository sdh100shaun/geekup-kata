<?php 
include_once '../src/Poker.php'; 

class PokerTest extends PHPUnit_Framework_TestCase
{

	private $poker; 

	public function setUp()
	{
		parent::setUp();
		$this->poker = new Poker(); 
	}

	public function testPokerInstantiated()
	{
		
		$this->assertNotNull($this->poker);
	}
}