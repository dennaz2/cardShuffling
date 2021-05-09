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

        //Display the numbe rof players and cards 
        echo "<p>Number of Players: $players</p>";
        echo "<p>Number of Cards: $cards</p>";
    
    ?>    



</body>
</html>

<!-- https://cislinux.hfcc.edu/~dbellman/cardShuffling/shuffle.php -->