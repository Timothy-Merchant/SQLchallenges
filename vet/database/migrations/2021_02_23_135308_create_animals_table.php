<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('animals', function (Blueprint $table) {            
            $table->id();
            $table->string("name", 255);
            $table->string('type', 255);
            $table->date('date_of_birth');
            $table->float('Weight');
            $table->float('Height');            
            $table->integer("Biteyness");
            $table->timestamps();            
            $table->foreignId("owner_id")
                ->constrained() 
                ->onDelete("cascade");            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
