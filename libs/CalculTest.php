<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 02.05.2019
 * Time: 22:54
 */
include 'Calcul.php';
use PHPUnit\Framework\TestCase;
class CalculTest extends TestCase {
    public function testSetFirst()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $this->assertEquals(10, $calcObj->getFirst());
    }
    public function testSetSecond()
    {
        $calcObj = new Calcul();
        $calcObj->setSecond(5);
        $this->assertEquals(5, $calcObj->getSecond());
    }
    public function testPlus()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $calcObj->setSecond(5);
        $this->assertEquals($calcObj->getFirst()+$calcObj->getSecond(), $calcObj->plus());
    }
    public function testMinus()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $calcObj->setSecond(5);
        $this->assertEquals($calcObj->getFirst()-$calcObj->getSecond(), $calcObj->minus());
    }
    public function testMultiplication()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $calcObj->setSecond(5);
        $this->assertEquals($calcObj->getFirst()*$calcObj->getSecond(), $calcObj->mult());
    }
    public function testDev()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $calcObj->setSecond(5);
        $this->assertEquals(round($calcObj->getFirst()/$calcObj->getSecond(),2), $calcObj->dev());
    }
    public function testPercent()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $calcObj->setSecond(5);
        $this->assertEquals(round($calcObj->getFirst() % $calcObj->getSecond()), $calcObj->percent());
    }
    public function testRad()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $this->assertEquals(round(sqrt($calcObj->getFirst()), 2), $calcObj->rad());
    }
    public function testOneDev()
    {
        $calcObj = new Calcul();
        $calcObj->setFirst(10);
        $this->assertEquals(round((1 / $calcObj->getFirst()), 2), $calcObj->oneDev());
    }

    public function testAdd()
    {
        $calcObj = new Calcul();
        $calcObj->add(5);
        $this->assertEquals(5, $calcObj->show());
    }
    public function testPick()
    {
        $calcObj = new Calcul();
        $calcObj->add(5);
        $calcObj->pick(3);
        $this->assertEquals(5-3, $calcObj->show());
    }
    public function testDel()
    {
        $calcObj = new Calcul();
        $calcObj->add(5);
        $calcObj->del();
        $this->assertEquals(null,$calcObj->show());
    }

}