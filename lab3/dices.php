<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roller</title>
</head>
<body>
<?php
function Roll($score = true) {
    $Dice1 = rand(1, 6); 
    $Dice2 = rand(1, 6); 
    return "2 Dices roll ". ($score? "=> $Dice1 + $Dice2 " : '')
                          . "=> ผลรวมคือ ". ($Dice1 + $Dice2); 
}
?>
<h3>without score</h3>
<?php echo Roll(false); ?>
<h3>with score</h3>
<?php echo Roll(); ?>
</body>
</html>