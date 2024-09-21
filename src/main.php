<?php

class Main
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
                return 0;
            } elseif ($rightHand === 1) {
                return 1;
            } else {
                return -1;
            }
        } elseif ($leftHand === 1) {
            // Choki
            if ($rightHand === 0 ) {
                return -1;
            } elseif ($rightHand === 1) {
                return 0;
            } else {
                return 1;
            }
        } else {
            // Par
            if ($rightHand === 0 ) {
                return 1;
            } elseif ($rightHand === 1) {
                return -1;
            } else {
                return 0;
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
        
        if ($result === 1) {
            echo '勝利' . PHP_EOL;
        } elseif ($result === -1) {
            echo '敗北' . PHP_EOL;
        } else {
            echo '引き分け' . PHP_EOL;
        }
    }
}


