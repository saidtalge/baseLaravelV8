<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->integer('perfil_id')->default(1)->comment('0=administrador;1=usuarionormal');
            $table->integer('status')->default(1)->comment('0=não;1=sim');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        DB::table('users')->insert(
            [
                "id" => 1,
                "name" => "admin",
                "email" => "admin@localhost",
                "email_verified_at" => null,
                "current_team_id" => null,
                "perfil_id" => 0,
                "status" => 1,
                "password" => bcrypt('12345678'), //'$2y$10$votoVCMJ682Tvy2BOKleFuHUlZKr0p9AKBkKNOCKfZMJ2tcVhEPLe',
                "profile_photo_path" => null
            ]
        );
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
