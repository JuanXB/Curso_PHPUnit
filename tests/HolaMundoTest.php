<?php

namespace App\Tests;

use App\HolaMundo;
use PHPUnit\Framework\TestCase;

/**
 * @covers HolaMundo::
 *  
 */

class HolaMundoTest extends TestCase
{
  public function testDiceHolaMundoCuandoSaluda()
  {
    $holaMundo = new HolaMundo();

    $this->assertEquals('Hola mundo!', $holaMundo->saluda());
  }
}
