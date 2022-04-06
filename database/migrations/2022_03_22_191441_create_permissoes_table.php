<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rotas_id');
            $table->foreign('rotas_id')->references('id')->on('rotas');
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfil');
            $table->string('rules')->comment("regras de permissões igual o linux. Create = 2, Update = 4, Read = 1");
            $table->timestamps();
        });

        DB::table('permissoes')->insert([
            [
                "id" => 1,
                "rotas_id" => 1,
                "perfil_id" => 1,
                "rules" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 2,
                "rotas_id" => 2,
                "perfil_id" => 1,
                "rules" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 3,
                "rotas_id" => 3,
                "perfil_id" => 1,
                "rules" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 4,
                "rotas_id" => 4,
                "perfil_id" => 1,
                "rules" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 5,
                "rotas_id" => 5,
                "perfil_id" => 1,
                "rules" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissoes');
    }
}
