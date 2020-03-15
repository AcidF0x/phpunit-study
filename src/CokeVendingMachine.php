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
     * @var int 병당 가격
     */
    private $price;

    /**
     * CokeVendingMachine constructor.
     * @param $cokeStock int 재고
     * @param $price int 가격
     */
    public function __construct($cokeStock, $price)
    {
        $this->stock = $cokeStock;
        $this->price = $price;
    }

    /**
     * 콜라 판매 메서드
     * @param $count int 갯수
     * @param $money int 투입금액
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
            throw new \Exception('재고가 부족합니다.');
        }

        $change = $money - $totalPrice;
        $this->stock -= $count;

        return $change;
    }

    /**
     * 재고 확인
     * @return int 재고
     */
    public function getStock()
    {
        return $this->stock;
    }
}
