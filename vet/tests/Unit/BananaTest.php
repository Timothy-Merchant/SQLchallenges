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

    public function testDatabase()
    {
        Owner::Create([
            'first_name' => 'Chiekk',
            'last_name' => 'Azukawa',
            'telephone' => '666666666',
            'email' => 'chieko@gmail.com',
            'address_1' => '14 Harmer Close',
            'address_2' => '14 Harmer Close',
            'town' => 'Tokyo',
            'postcode' => 'SW12379',
        ]);

        $ownerFromDB = Owner::first();

        $this->assertSame('Chiekk', $ownerFromDB->first_name);
    }

    public function testEmailReceived()
    {
        Owner::Create([
            'first_name' => 'Chiekk',
            'last_name' => 'Azukawa',
            'telephone' => '666666666',
            'email' => 'chieko@gmail.com',
            'address_1' => '14 Harmer Close',
            'address_2' => '14 Harmer Close',
            'town' => 'Tokyo',
            'postcode' => 'SW12379',
        ]);

        $ownerFromDB = Owner::first();

        $this->assertSame('Email already exists', $ownerFromDB->emailAlreadyExists($ownerFromDB, $ownerFromDB->email));
    }

    public function testEmailNotInDatabase()
    {
        Owner::Create([
            'first_name' => 'Chiekk',
            'last_name' => 'Azukawa',
            'telephone' => '666666666',
            'email' => 'chiek@gmail.com',
            'address_1' => '14 Harmer Close',
            'address_2' => '14 Harmer Close',
            'town' => 'Tokyo',
            'postcode' => 'SW12379',
        ]);

        $ownerFromDB = Owner::first();

        $this->assertFalse(Owner::where('email', '=', $ownerFromDB->email)->count() === 0);
    }

    public function testEmailInDatabase()
    {
        Owner::Create([
            'first_name' => 'Chiekk',
            'last_name' => 'Azukawa',
            'telephone' => '666666666',
            'email' => 'chieko@gmail.com',
            'address_1' => '14 Harmer Close',
            'address_2' => '14 Harmer Close',
            'town' => 'Tokyo',
            'postcode' => 'SW12379',
        ]);

        $ownerFromDB = Owner::first();

        $this->assertTrue(Owner::where('email', '=', $ownerFromDB->email)->exists());
    }
}
