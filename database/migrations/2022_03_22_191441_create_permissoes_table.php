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
            $table->string('routes');
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfil');
            $table->integer('rules')->comment("regras de permissões em binario. 0 = não autorizado e 1 autorizado. Ordem Create, Update, Read, Other = Ex.:0010");
            $table->timestamps();
        });

        DB::table('permissoes')->insert([
            [
                "id" => 1,
                "routes" => "/dashboard",
                "perfil_id" => 1,
                "rules" => 1111,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 2,
                "routes" => "/users",
                "perfil_id" => 1,
                "rules" => 1111,
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 3,
                "routes" => "/profiles",
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
