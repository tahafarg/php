<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('s_time');
            $table->time('e_time');
            $table->string('spos');
            $table->string('epos');
            // $table->string('stat_place');
            $table->float('price');
              $table->foreignId('driver_id')->constrained('passes')->onUpdate('cascade')->onDelete('cascade');
              $table->enum('status',['bending','Accepted','Rejected']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
};
