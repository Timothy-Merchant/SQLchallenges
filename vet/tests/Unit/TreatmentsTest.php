<?php

namespace Tests\Unit;

use App\Models\Treatment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\routes;
use App\Models\Owner;

class TreatmentsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_fromstrings()
    {
        $testTreatment1 = new Treatment([
            "name" => "medicine1",
        ]);
        $testTreatment2 = new Treatment([
            "name" => "medicine2",
        ]);
        $testTreatment3 = new Treatment([
            "name" => "medicine3",
        ]);

        $testTreatment = Treatment::fromStrings(['   medicine1', '   medicine1', 'medicine2   ', ' medicine3']);

        $this->assertTrue($testTreatment1->name === $testTreatment->get(0)->name);
        $this->assertNull($testTreatment->get(1));
        $this->assertTrue($testTreatment2->name === $testTreatment->get(2)->name);
        $this->assertTrue($testTreatment3->name === $testTreatment->get(3)->name);
    }
}
