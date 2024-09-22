<?php

interface DisplayInterface
{
    public function win(): void;
    public function lose(): void;
    public function draw(): void;
}