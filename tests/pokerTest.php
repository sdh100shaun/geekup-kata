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

	/**
	*@dataProvider hands
	*
	*/
	public function testHandsIsArray($data)
	{
		
	}

	public function testSameSuitFalseWhenNotSameSuit()
	{
		$blackHand = array("black"=>$this->hands()["black"][0]);
		$whiteHand = array("white"=>$this->hands()["white"][0]);
		
		$hands = array_merge($blackHand,$whiteHand);

		

		$ranking = new Ranking()
		$this->assertFalse($ranking->areCardsAllSameSuit($hands));
	}

	public function hands()
	{
		return array(
				"black"=>array(array("2H","3D","5S","9C", "KD"),  
				         array("2H","4S","4C","2D","4H"),  
						 array("2H","3D","5S","9C", "KD"),  
						 array("2H","3D","5S","9C", "KD")), 
				"white"=>array(array("2C","3H","4S","8C", "AH"),
					    array("2S","8S", "AS", "QS","3S"),
					    array("2C","3H","4S","8C", "KH"),
					    array("2D","3H","5C","9S", "KH")));
	}
}