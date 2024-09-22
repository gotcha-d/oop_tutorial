<?php

class JankenGame
{
    var $display;

    public function __construct(DisplayInterface $display) {
        $this->display = $display;
    }
    /**
     * Undocumented function
     * 
     * 0: グー、1: チョキ、2: パー
     *
     * @param integer $leftHand
     * @param integer $rightHand
     * @return void
     */
    public function play(int $leftHand, int $rightHand) {
        $result = $this->judge($leftHand, $rightHand);
        $this->displayResult($result);
    }

    /**
     * じゃんけんの勝敗を判定する
     *
     * @param [type] $leftHand
     * @param [type] $rightHand
     * @return void
     */
    public function judge($leftHand, $rightHand) {

        if ($leftHand === 0) {
            // Goo
            if ($rightHand === 0 ) {
                return "draw";
            } elseif ($rightHand === 1) {
                return "win";
            } else {
                return "lose";
            }
        } elseif ($leftHand === 1) {
            // Choki
            if ($rightHand === 0 ) {
                return "lose";
            } elseif ($rightHand === 1) {
                return "draw";
            } else {
                return "win";
            }
        } else {
            // Par
            if ($rightHand === 0 ) {
                return "win";
            } elseif ($rightHand === 1) {
                return "lose";
            } else {
                return "draw";
            }
        }
    }

    private function displayResult($result) {
        if ($result === 1) {
            $this->display->win();
        } elseif ($result === 0) {
            $this->display->draw();
        } else {
            $this->display->lose();
        }
    }
}


