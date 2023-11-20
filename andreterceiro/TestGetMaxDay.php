<?php
namespace andreterceiro;
require_once("maxDayOfTheMonth.php");

use PHPUnit\Framework\TestCase;

/**
 * Tests of the max day of the month calculation
 */
final class TestGetMaxDay extends TestCase
{
    /**
     * Testing the maximun day of january
     * 
     * @access public
     * 
     * @return null
     */
    public function testJanuary(): void
    {
        $this->assertEquals(
            getMaxDay("01", "1995"),
            31
        );
    }

    /**
     * Testing the maximun day of march
     * 
     * @access public
     * 
     * @return null
     */
    public function testMarch(): void
    {
        $this->assertEquals(
            getMaxDay("03", "2002"),
            31
        );
    }

    /**
     * Testing the maximun day of april
     * 
     * @access public
     * 
     * @return null
     */
    public function testApril(): void
    {
        $this->assertEquals(
            getMaxDay("04", "2007"),
            30
        );
    }

    /**
     * Testing the maximun day of may
     * 
     * @access public
     * 
     * @return null
     */
    public function testMay(): void
    {
        $this->assertEquals(
            getMaxDay("05", "2000"),
            31
        );
    }

    /**
     * Testing the maximun day of june
     * 
     * @access public
     * 
     * @return null
     */
    public function testJune(): void
    {
        $this->assertEquals(
            getMaxDay("06", "1999"),
            30
        );
    }

    /**
     * Testing the maximun day of july
     * 
     * @access public
     * 
     * @return null
     */
    public function testJuly(): void
    {
        $this->assertEquals(
            getMaxDay("07", "2007"),
            31
        );
    }

    /**
     * Testing the maximun day of august
     * 
     * @access public
     * 
     * @return null
     */
    public function testAugust(): void
    {
        $this->assertEquals(
            getMaxDay("08", "2020"),
            31
        );
    }

    /**
     * Testing the maximun day of september
     * 
     * @access public
     * 
     * @return null
     */
    public function testSeptember(): void
    {
        $this->assertEquals(
            getMaxDay("09", "2019"),
            30
        );
    }
   
    /**
     * Testing the maximun day of october
     * 
     * @access public
     * 
     * @return null
     */
    public function testOctober(): void
    {
        $this->assertEquals(
            getMaxDay("10", "2012"),
            31
        );
    }

    /**
     * Testing the maximun day of november
     * 
     * @access public
     * 
     * @return null
     */
    public function testNovember(): void
    {
        $this->assertEquals(
            getMaxDay("11", "2017"),
            30
        );
    }

    /**
     * Testing the maximun day of december
     * 
     * @access public
     * 
     * @return null
     */
    public function testDecember(): void
    {
        $this->assertEquals(
            getMaxDay("12", "2018"),
            31
        );
    }

    /**
     * Testing the maximun day of febuary in 1996
     * 
     * @access public
     * 
     * @return null
     */
    public function testFebuary1996(): void
    {
        $this->assertEquals(
            getMaxDay("02", "1996"),
            29
        );
    }

    /**
     * Testing the maximun day of febuary in 1997
     * 
     * @access public
     * 
     * @return null
     */
    public function testFebuary1997(): void
    {
        $this->assertEquals(
            getMaxDay("02", "1997"),
            28
        );
    }
}