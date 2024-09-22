<?php

include 'JankenGame.php';

$main = new JankenGame();
$main->play(1, 0, 'ja');
$main->play(0, 1, 'en');
