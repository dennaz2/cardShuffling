<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card shuffling</title>
</head>
<body>
    <?php
        //Get and sanitizr the data 
        $players = substr(filter_input(INPUT_POST, 'players', FILTER_SANITIZE_NUMBER_INT),0,1);
        $cards = substr(filter_input(INPUT_POST, 'cards', FILTER_SANITIZE_NUMBER_INT),0,1);

        //Declare variables 
        $unsuffledDeck = array("2H", "2D", "2C",  "2S", "3H", "3D", "3C", "3S", "4H", "4D", "4C", "4S", "5H", "5D", "5C", "5S", "6H", "6D", "6C", "6S", "7H", "7D", "7C", "7S", "8H", "8D", "8C", "8S", "9H", "9D", "9C", "9S", "10H", "10D", "10C", "10S", "JH", "JD", "JC", "JS", "QH", "QD", "QC", "QS", "KH", "KD", "KC", "KS", "AH", "AD", "AC", "AS");

        //Display a header 
        echo "<h4>Cards dealed to players: </h4>";

        //Display the numbe rof players and cards 
        echo "<p>Number of Players: $players</p>";
        echo "<p>Number of Cards: $cards</p>";

        //
    
    ?>    



</body>
</html>

<!-- https://cislinux.hfcc.edu/~dbellman/cardShuffling/shuffle.php -->