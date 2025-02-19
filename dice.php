<?php
$player1_score = 0;
$player2_score = 0;

for ($round = 1; $round <= 5; $round++) {
    echo "<b>Round $round:</b><br>";
    
    $player1 = rand(1, 6);
    $player2 = rand(1, 6);
    
    echo "Player 1 rolled: $player1 <br>";
    echo "Player 2 rolled: $player2 <br>";
    
    if ($player1 > $player2) {
        echo "<b>Player 1 wins this round!</b><br><br>";
        $player1_score++;
    } elseif ($player2 > $player1) {
        echo "<b>Player 2 wins this round!</b><br><br>";
        $player2_score++;
    } else {
        echo "<b>It's a tie!</b><br><br>";
    }
}

echo "<b>Final Scores:</b><br>";
echo "Player 1: $player1_score wins<br>";
echo "Player 2: $player2_score wins<br>";

if ($player1_score > $player2_score) {
    echo "<b>Overall Winner: Player 1!</b>";
} elseif ($player2_score > $player1_score) {
    echo "<b>Overall Winner: Player 2!</b>";
} else {
    echo "<b>It's an overall tie!</b>";
}
?>
