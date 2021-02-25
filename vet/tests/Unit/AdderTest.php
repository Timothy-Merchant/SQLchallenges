<?php

namespace Tests\Unit;

use App\Adder;
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->adder = new Adder();
    }

    public function testOnePlus0()
    {
        $this->assertSame(1, $this->adder->add(1, 0));
    }
}
