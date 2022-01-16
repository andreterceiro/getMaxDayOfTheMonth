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
            getMaxDayUsingDateFormat("01", "1995"),
            31
        );
    }

    public function testMarch(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("03", "2002"),
            31
        );
    }

    public function testApril(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("04", "2007"),
            30
        );
    }

    public function testMay(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("05", "2000"),
            31
        );
    }

    public function testJune(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("06", "1999"),
            30
        );
    }

    public function testJuly(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("07", "2007"),
            31
        );
    }

    public function testAugust(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("08", "2020"),
            31
        );
    }

    public function testSeptember(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("09", "2019"),
            30
        );
    }
   
    public function testOctober(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("10", "2012"),
            31
        );
    }

    public function testNovember(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("11", "2017"),
            30
        );
    }

    public function testDecember(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("12", "2018"),
            31
        );
    }

    public function testFebuary1996(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("02", "1996"),
            29
        );
    }

    public function testFebuary2000(): void
    {
        $this->assertEquals(
            getMaxDayUsingDateFormat("02", "2000"),
            29
        );
    }

}