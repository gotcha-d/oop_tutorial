<?php

class JapaneseDisplay {
    public function showResult($result) {
        if ($result === "win") {
            echo '勝利' . PHP_EOL;
        } elseif ($result === "lose") {
            echo '敗北' . PHP_EOL;
        } else {
            echo '引き分け' . PHP_EOL;
        }
    }    
}