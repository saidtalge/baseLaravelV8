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
            $table->string('rules')->comment("regras de permissões em binario. 0 = não autorizado e 1 autorizado. Ordem Create, Update, Read, Other = Ex.:0010");
            $table->timestamps();
        });

        DB::table('permissoes')->insert([
            [
                "id" => 1,
                "rotas_id" => 1,
                "perfil_id" => 1,
                "rules" => 1111,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 2,
                "rotas_id" => 2,
                "perfil_id" => 1,
                "rules" => 1111,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 3,
                "rotas_id" => 3,
                "perfil_id" => 1,
                "rules" => 1111,
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
