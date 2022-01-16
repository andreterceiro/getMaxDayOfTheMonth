<?php
namespace andreterceiro;
require_once("maxDayOfTheMonth.php");
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testJanuary(): void
    {
        $this->assertEquals(
            getMaxDay("01", "1995"),
            31
        );
    }

    public function testMarch(): void
    {
        $this->assertEquals(
            getMaxDay("03", "2002"),
            31
        );
    }

    public function testApril(): void
    {
        $this->assertEquals(
            getMaxDay("04", "2007"),
            30
        );
    }

    public function testMay(): void
    {
        $this->assertEquals(
            getMaxDay("05", "2000"),
            31
        );
    }

    public function testJune(): void
    {
        $this->assertEquals(
            getMaxDay("06", "1999"),
            30
        );
    }

    public function testJuly(): void
    {
        $this->assertEquals(
            getMaxDay("07", "2007"),
            31
        );
    }

    public function testAugust(): void
    {
        $this->assertEquals(
            getMaxDay("08", "2020"),
            31
        );
    }

    public function testSeptember(): void
    {
        $this->assertEquals(
            getMaxDay("09", "2019"),
            30
        );
    }
   
    public function testOctober(): void
    {
        $this->assertEquals(
            getMaxDay("10", "2012"),
            31
        );
    }

    public function testNovember(): void
    {
        $this->assertEquals(
            getMaxDay("11", "2017"),
            30
        );
    }

    public function testDecember(): void
    {
        $this->assertEquals(
            getMaxDay("12", "2018"),
            31
        );
    }

    public function testFebuary1996(): void
    {
        $this->assertEquals(
            getMaxDay("02", "1996"),
            29
        );
    }

    public function testFebuary2000(): void
    {
        $this->assertEquals(
            getMaxDay("02", "2000"),
            29
        );
    }

}