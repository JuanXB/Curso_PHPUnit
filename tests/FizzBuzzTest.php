<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function testCuandoLedoyElNumeroTresMeDevuelveFizz(): void
  {
    $fizzBuzz = new FizzBuzz();

    $resultado = $fizzBuzz->diNumero(3);

    $this->assertEquals('Fizz', $resultado);
  }

  public function testCuandoLedoyElNumeroCincoMeDevuelveBuzz(): void
  {
    $fizzBuzz = new FizzBuzz();

    $resultado = $fizzBuzz->diNumero(5);

    $this->assertEquals('Buzz', $resultado);
  }

  public function testCuandoLedoyElNumeroQuinceMeDevuelveFizzBuzz(): void
  {
    $fizzBuzz = new FizzBuzz();

    $resultado = $fizzBuzz->diNumero(15);

    $this->assertEquals('FizzBuzz', $resultado);
  }

  public function testCuandoLedoyElNumeroUnoMeDevuelveUno(): void
  {
    $fizzBuzz = new FizzBuzz();

    $resultado = $fizzBuzz->diNumero(1);

    $this->assertEquals(1, $resultado);
  }
}
