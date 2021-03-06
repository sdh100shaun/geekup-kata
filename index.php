<?php

class Ranking
{
    public $cardRankingScore = array("A" => 14, "K" => 13, "Q" => 12, "J" => 11);

    public $royalFlush = array("A", "K", "Q", "J", 10);
    public $handRanking = array();

    public $rankingHands = array();

    //if

    public function __construct()
    {
        $rankingHands[0] = $this->royalFlush;
    }

    public function isRoyalFlush($hand)
    {
        $sameSuit = $this->areCardsAllSameSuit($hand);

        if($sameSuit)
        {
         
          foreach($hand as $card){

               if(!in_array(substr($card, 0,1),$this->royalFlush))
                {
                    return false;
                };
            } 
            

          
          
        }
        else
        {
            return false;
        }
        
        return true;

    }


    public function findMatchingHands($hand)
    {
        //need to check whether hands match any of the known ranking hands;


        foreach ($this->rankingHands as $key => $Value)
        {

        }
    }

    public function areCardsAllSameSuit($hand)
    {
        $allSameSuit = true;
        $previousSuit = "";

            foreach ($hand as $cards){

            $suit = substr($cards, 1);

            
            if ($previousSuit == "")
            {
                $previousSuit = $suit;
            }
            else
            {
                
                if ($previousSuit != $suit)
                {

                    return false;
                }
            }
        }

        return $allSameSuit;
    }

    public function splitHands($hands)
    {

    }
}



//Black: 2H 3D 5S 9C KD  White: 2C 3H 4S 8C AH

$hands = array( "black" => array("2H", "3D", "5S", "9C", "KD"),
                "white" => array("2C", "3C", "4C", "8C", "AC"));

$ranking = new Ranking();

foreach ($hands as $hand)
{
    $cardsAllSameSuit = $ranking->areCardsAllSameSuit($hand);

    echo $cardsAllSameSuit;
}

//foreach ($hands)

//$ranking->isRoyalFlush($hands);


