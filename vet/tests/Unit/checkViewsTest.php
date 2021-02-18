<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\routes;

class checkViewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_views()
    {
        $response = $this->get('/');        
        $response->assertViewIs('welcome');
    }

}
