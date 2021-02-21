<?php

namespace Tests\Unit;

use App\Models\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BananaTest extends TestCase
{
    use RefreshDatabase;

    public function testBananasArgumentEntry()
    {
        $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");
        $this->assertSame(Owner::haveWeBananas(2), "Yes we have 2 bananas");
        $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");
        $this->assertSame(Owner::haveWeBananas(-12), "Yes we have -12 bananas");
    }

}
