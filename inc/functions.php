<?php

    function displaySymbol($rand, $pos){
        switch($rand){
            case 0: $symbol = "seven";
                    break;
            case 1: $symbol = "cherry";
                    break;
            case 2: $symbol = "lemon";
                    break;
            case 3: $symbol = "orange";
                    break;
        }
        echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt = '$symbol' title= '" . ucfirst($symbol) . "' width = '70'>";
    }
        
    function displayPoints($rand1, $rand2, $rand3)
    {
        echo "<div id = 'output' >";
        if($rand1 == $rand2 && $rand2 == $rand3)
        {
            switch ($rand1) {
                case 0:
                    $points = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                case 1:
                    $points = 500;
                    break;
                case 2:
                    $points = 250;
                    break;
                case 3:
                    $points = 900;
                    break;
            }
            echo "<h2>You won $points points!</h2>";
        }
        else {
            echo "<h3> Try Again! </h3>";
        }
        echo "</div>";
    }
    
    function play()
    {
        for($i=1; $i<4; $i++){
            ${"randomValue" . $i } = rand(0,3);
            displaySymbol(${"randomValue" . $i}, $i);
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
?>