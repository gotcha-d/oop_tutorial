<?php

include_once 'DisplayInterface.php';

class JapaneseDisplay implements DisplayInterface {

    public function show($result):void
    {
        if ($result === "win") {
            echo '勝利' . PHP_EOL;
        } elseif ($result === "lose") {
            echo '敗北' . PHP_EOL;
        } else {
            echo '引き分け' . PHP_EOL;
        }
    }
}