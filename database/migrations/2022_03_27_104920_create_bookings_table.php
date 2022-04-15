<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('driver_id')->constrained('passes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('trip_id')->constrained('trips')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('spos_id')->constrained('stations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('espos_id')->constrained('stations')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('count');
            $table->enum('status',['Pending','Accepted','Rejected']);
            $table->enum('aces',['not_done','done']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
