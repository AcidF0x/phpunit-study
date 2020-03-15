<?php

use App\CokeVendingMachine;
use PHPUnit\Framework\TestCase;

/**
 * Class CokeVendingMachineTest
 * @coversDefaultClass \App\CokeVendingMachine
 */
class CokeVendingMachineTest extends TestCase
{
    /** @var int */
    private $price, $stock;
    /** @var CokeVendingMachine */
    private $vendingMachine;

    protected function setUp(): void
    {
        parent::setUp();

        $this->price = 1000;
        $this->stock = 10;
        $this->vendingMachine = new CokeVendingMachine($this->stock, $this->price);
    }

    /**
     * 콜라를 구매 할 수 있다.
     * @covers ::buyCoke
     */
    public function testBuyable()
    {
        // Given
        $money = 2000;
        $count = 2;

        // When
        $change = $this->vendingMachine->buyCoke($count, $money);

        // Then
        $this->assertSame($money - ($count * $this->price), $change);
        $this->assertSame($this->stock - $count, $this->vendingMachine->getStock());
    }

    /**
     * 재고보다 많이 구매 할 수 없다.
     * @throws Exception
     */
    public function testExceptionWhenStockNotEnough()
    {
        // Given
        $money = 1000000;
        $count = 15;

        // When && Then
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('재고가 부족합니다.');
        $this->vendingMachine->buyCoke($count, $money);
    }

    /**
     * 금액이 부족한 경우 구매 할 수 없다
     * @throws Exception
     */
    public function testExceptionWhenMoneyNotEnough()
    {
        // Given
        $money = 10;
        $count = 10;

        // When && Then
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('금액이 부족합니다.');
        $this->vendingMachine->buyCoke($count, $money);
    }
}
