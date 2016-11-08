<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->char('password',60);
            $table->string('imagen'
            );
            $table->enum('rol', ['QUINDIO SOLIDARIO','COODEQ','COFINCAFÉ','FEIBG','FEUQ','AVANZA','AUXILIAR'])->default('AUXILIAR');
            $table->rememberToken();
            $table->timestamps();
        });
        $pass=bcrypt('quindio@gmail.com');
        DB::statement("INSERT INTO `users` (`name`,`email`,`password`,`imagen`,`rol`) VALUES ('ROOT','quindio@gmail.com','$pass','hulk.png','QUINDIO SOLIDARIO')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
