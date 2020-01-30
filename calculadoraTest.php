<?php
use calculadora;
use PHPUnit\Framework\TestCase;

final class calculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new calculadora();
        $this->assertEquals(
            7,
            $calc->suma(3, 4)
        );
    }
}
