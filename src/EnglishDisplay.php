<?php

class EnglishDisplay {

    public function showResult($result) {
        if ($result === "win") {
            echo 'WIN' . PHP_EOL;
        } elseif ($result === "lose") {
            echo 'LOSW' . PHP_EOL;
        } else {
            echo 'DRAW' . PHP_EOL;
        }
    }
}