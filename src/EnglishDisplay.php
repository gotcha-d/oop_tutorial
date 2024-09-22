<?php

include_once 'DisplayInterface.php';

class EnglishDisplay implements DisplayInterface {

    public function show($result) : void
    {
        if ($result === "win") {
            echo 'WIN' . PHP_EOL;
        } elseif ($result === "lose") {
            echo 'LOSW' . PHP_EOL;
        } else {
            echo 'DRAW' . PHP_EOL;
        }
    }
}