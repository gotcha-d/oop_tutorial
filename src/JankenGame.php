<?php

class JankenGame
{

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
        $this->showResult($result);
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

    /**
     * 結果を表示する
     *
     * @param [type] $result
     * @return void
     */
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


