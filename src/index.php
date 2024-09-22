<?php

include 'JapaneseDisplay.php';
include 'EnglishDisplay.php';
include 'JankenGame.php';

$display = new JapaneseDisplay();
$main = new JankenGame($display);
$main->play(1, 0);

$display = new EnglishDisplay();
$main = new JankenGame($display);
$main->play(0, 1);
