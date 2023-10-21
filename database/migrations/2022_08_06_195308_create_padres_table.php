<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1', 120);
            $table->string('nombre2', 120)->nullable();
            $table->string('dpi1', 20);
            $table->string('dpi2', 20)->nullable();
            $table->string('direccion1');
            $table->string('direccion2')->nullable();
            $table->string('civil1');
            $table->string('civil2')->nullable();
            $table->string('nacionalidad1');
            $table->string('nacionalidad2')->nullable();
            $table->integer('edad1');
            $table->integer('edad2')->nullable();
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->string('telefono3')->nullable();
            $table->string('telefono4')->nullable();

            $table->string('lugart1', 100)->nullable();
            $table->string('lugart2', 100)->nullable();
            $table->string('empresa1', 100)->nullable();
            $table->string('empresa2', 100)->nullable();
            $table->string('tel_empresa1', 10)->nullable();
            $table->string('tel_empresa2', 10)->nullable();
            $table->string('profecion1', 100)->nullable();
            $table->string('profecion2', 100)->nullable();
            $table->string('parentesco1', 25)->nullable();
            $table->string('parentesco2', 25)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('padres');
    }
}
