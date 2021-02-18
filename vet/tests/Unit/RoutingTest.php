<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\routes;
use App\Models\Owner;

class RoutingTest extends TestCase
{
    use RefreshDatabase;

    
    public function test_for_200()
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

        $response = $this->get('/owners/1');        
        $response->assertStatus(200);
    }

    public function test_for_404()
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
        
        $response = $this->get('/about');        
        $response->assertStatus(404);
    }
}
