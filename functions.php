<?php
    function play()
    {
        $deck = array(); // CREATES DECK
        for($i=0; $i<=3; $i++)
        {
            for($j=1; $j<=13; $j++)
            {
                array_push($deck, $i."/".$j); // STORES IN ARRAY AS "SUIT/CARD" ex. "0/1"
            }
        }
        shuffle($deck); // SHUFFLES DECK
        getHand($deck);
    }
    function getHand($shuffledDeck)
    {
        $players = array(array("p1", 0, 0, 0, 0, 0, 0), array("p2", 0, 0, 0, 0, 0, 0), array("p3", 0, 0, 0, 0, 0, 0), array("p4", 0, 0, 0, 0, 0, 0));
        $round = 1;
        do
        {
            for($i = 1; $i <= 4; $i++)
            {
                $lastCard = array_pop($shuffledDeck);
                $players[$i][$round] = $lastCard;
            }
            $round++;
        }
        while($round <= 6);
        displayHands($players);
    }
    function displayHands($game)
    {
        $player = 1;
        do
        {
            for($i = 1; $i <= 6; $i++)
            {
                displayCard($game[$player][$i]);
            }
            $player++;
            echo "<br>";
        }
        while($player <= 4);
    }
    function displayCard($card)
    {
        echo "<img src='../lab3/cards/$card.png'>"; 
    }
?>