<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsibilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('people_id')->constrained('people')->onDelete('cascade');
            $table->foreignId('movement_id')->constrained('movements')->onDelete('cascade');
            $table->enum('rol',['vendedor', 'comprador', 'saliente', 'entrega', 'recibe', 'autoriza', 'cuentadante', 'vigilanciaSalida', 'vigilanciaEntrada']);
            $table->datetime('date');
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
        Schema::dropIfExists('responsibilities');
    }
}
