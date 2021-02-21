<?php

namespace Tests\Unit;

use App\Models\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailReceivedTest extends TestCase
{
    use RefreshDatabase;
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
}
