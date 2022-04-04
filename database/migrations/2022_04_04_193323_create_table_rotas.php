<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableRotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('rotas')->insert([
            [
                "id" => 1,
                "name" => "/dashboard",
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 2,
                "name" => "/users",
                "created_at" => now(),
                "updated_at" => now()
            ],[
                "id" => 3,
                "name" => "/profiles",
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
        Schema::dropIfExists('table_rotas');
    }
}
