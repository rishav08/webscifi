<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('user_id')->index();
            $table->integer('activity_id')->index();
            $table->integer('no_of_people')->index();
            $table->time('slot_start_time')->index();
            $table->time('slot_end_time')->index();
            $table->integer('delete')->index();
            $table->enum('status', ['active', 'inactive'])->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
