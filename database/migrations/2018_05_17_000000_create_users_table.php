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
            $table->integer('npm');
            $table->primary('npm');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            // $table->string('npm');
            $table->integer('id_prodi');
            $table->foreign('id_prodi')
                ->references('id')->on('prodis')
                ->onDelete('cascade');
            $table->enum('role', ['admin', 'user'])->default('user');   
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
