<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\routes;

class HTTPTest extends TestCase
{    
    use RefreshDatabase;

    public function test_for_200()
    {        
        $response = $this->get('/');        
        $response->assertStatus(200);

    }

    public function test_for_404()
    {        
        $response = $this->get('/about');        
        $response->assertStatus(404);

    }
}
