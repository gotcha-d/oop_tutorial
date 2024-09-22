<?php

include 'JapaneseDisplay.php';
include 'EnglishDisplay.php';
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
    public function play(int $leftHand, int $rightHand, string $lang) {
        $result = $this->judge($leftHand, $rightHand);
        $this->showResult($result, $lang);
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
    public function showResult($result, $lang) {

        if ($lang == 'ja') {
            $display = new JapaneseDisplay();
        } else {
            $display = new EnglishDisplay();
        }
        $display->showResult($result);
    }
}


