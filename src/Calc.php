<?php

/**
 * Class Calc
 */
class Calc
{
    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function plus($a, $b) {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function minus($a, $b) {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function multiply($a, $b) {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function division($a, $b) {
        return $a / $b;
    }
}