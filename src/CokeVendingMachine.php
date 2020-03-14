<?php

namespace App;

/**
 * Class CokeVendingMachine
 * @package App
 */
class CokeVendingMachine
{
    /**
     * @var int 콜라재고
     */
    private $stock;
    /**
     * @var int 병당 가
     */
    private $price;

    /**
     * CokeVendingMachine constructor.
     * @param $cokeStock 콜라 재고
     * @param $price 병당 가격
     */
    public function __construct($cokeStock, $price)
    {
        $this->stock = $cokeStock;
        $this->price = $price;
    }

    /**
     * 콜라 판매 메서드
     * @param $count 갯수
     * @param $money 투입 액금
     * @throws \Exception
     * @return int 잔돈
     */
    public function buyCoke($count, $money)
    {
        $totalPrice = $count * $this->price;

        if ($money < $totalPrice) {
            throw new \Exception('금액이 부족합니다.');
        }

        if ($this->stock < $count) {
            throw new \Exception('금액이 부족합니다.');
        }

        $change = $this->price - $totalPrice;
        return $change;
    }

    /**
     * 재고 확
     * @return int 재고
     */
    public function getStock()
    {
        return $this->getStock();
    }
}
