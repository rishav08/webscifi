<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('access', ['user', 'admin'])->default('user');
            $table->boolean('blocked')->default(0);
            $table->integer('faults')->default(0);
            // $table->rememberToken();
            $table->timestamps();
        });

        \DB::table('users')->insert([
            'name'  => 'UTD Comet',
            'email'     => 'comet@utdallas.edu',
            'password'   => Hash::make('webscifi'),
            'access'    => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        \DB::table('users')->insert([
            'name'  => 'Rishav Kumar',
            'email'     => 'rxk171330@utdallas.edu',
            'password'   => Hash::make('webscifi'),
            'access'    => 'user',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
