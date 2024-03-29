<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{

    public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('email', 100)->unique()->notNullable();
            $table->string('password')->notNullable();
            $table->timestamps();
        });
    }

    public function down(){

        Schema::dropIfExists('users');
    }
}
