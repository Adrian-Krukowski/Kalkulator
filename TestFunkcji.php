<?php
require 'FunkcjePHP.php';

class TestFunkcji extends PHPUnit_Framework_TestCase
{
        public function testDodawanie()
        {
            $dodawanieTest = new funkcjeObliczeniowe();
            $res = $dodawanieTest->dodawanie(5,5);
            $this->assertEquals(10, $res);
        }

    public function testOdejmowanie()
    {
        $odejmowanieTest = new funkcjeObliczeniowe();
        $res = $odejmowanieTest->odejmowanie(15,5);
        $this->assertEquals(10, $res);
    }

    public function testMnozenie()
    {
        $mnozenieTest = new funkcjeObliczeniowe();
        $res = $mnozenieTest->mnozenie(5,5);
        $this->assertEquals(25, $res);
    }

    public function testDzielenie()
    {
        $dzielenieTest = new funkcjeObliczeniowe();
        $res = $dzielenieTest->dzielenie(15,5);
        $this->assertEquals(3, $res);
    }

    public function testPierwiastkowanie()
    {
        $pierwiastkowanieTest = new funkcjeObliczeniowe();
        $res = $pierwiastkowanieTest->pierwiastkowanie(25);
        $this->assertEquals(5, $res);
    }

    public function testPotegowanie2()
    {
        $potegowanie2Test = new funkcjeObliczeniowe();
        $res = $potegowanie2Test->potegowanie2(3);
        $this->assertEquals(9, $res);
    }

    public function testPotegowanieDoN()
    {
        $potegowanieDoNTest = new funkcjeObliczeniowe();
        $res = $potegowanieDoNTest->potegowanieDoN(2,3);
        $this->assertEquals(8, $res);
    }

    public function testModulo()
    {
        $moduloTest = new funkcjeObliczeniowe();
        $res = $moduloTest->modulo(10, 4);
        $this->assertEquals(2, $res);
    }
}
?>