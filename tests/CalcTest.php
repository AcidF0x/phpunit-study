<?php

use PHPUnit\Framework\TestCase;

/**
 * Class CalcTest
 */
class CalcTest extends TestCase
{
    public function testEqules()
    {
        $a = 10;
        $this->assertEquals(10, $a); //성공
        $this->assertEquals("10", $a); //성공
    }

    public function testSame()
    {
        $a = 10;
        $this->assertSame(10, $a); //성공
        // $this->assertSame("10", $a); //실패
    }

    public function testCount()
    {
        $array = [ 1, 2, 3, 4 ];
        $this->assertCount(count($array), $array); //성공
        // $this->assertCount(1, $array); // 실패
    }

//    public function testBools()
//    {
//        $result = doSomeThing();
//        $this->assertTrue($result);
//        $this->assertFalse($result);
//        $this->assertNull($result);
//    }

    public function testContains()
    {
        $array = [ 1, 2, 3, 4 ];
        $this->assertContains(3, $array); // 성공
        $this->assertNotContains(10, $array); //성공
        //$this->assertContains(10, $array); //실패
    }

    public function testAssertArrayHasKey()
    {
        $array = [
          'key' => 1,
          'key2' => 2,
          'key3' => 3
        ];

        $this->assertArrayHasKey('key', $array); //성공
        $this->assertArrayNotHasKey('wow', $array); //성공
//        $this->assertArrayHasKey('key100', $array); //실패
    }


    public function testExceptException()
    {
        $func = function () {
            throw new Exception('에러 메시지');
        };

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('에러 메시지');
        $func();
    }

}
