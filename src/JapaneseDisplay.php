<?php

include_once 'DisplayInterface.php';

class JapaneseDisplay implements DisplayInterface {

    public function win(): void {
        echo '勝利' . PHP_EOL;
    }

    public function lose(): void {
        echo '敗北' . PHP_EOL;
    }

    public function draw(): void {
        echo '引き分け' . PHP_EOL;
    }
}