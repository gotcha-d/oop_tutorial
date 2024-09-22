<?php

include_once 'DisplayInterface.php';

class EnglishDisplay implements DisplayInterface {

    public function win(): void {
        echo 'WIN' . PHP_EOL;
    }

    public function lose(): void {
        echo 'LOSE' . PHP_EOL;
    }

    public function draw(): void {
        echo 'DRAW' . PHP_EOL;
    }
}