
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
             $table->foreignId('element_id')->constrained('elements')->onDelete('cascade');
            $table->foreignId('warehouse_id')->constrained('warehouses')->onDelete('cascade');
            $table->foreignId('people_id')->constrained('people')->onDelete('cascade');
            $table->text('description');
            $table->integer('worth');
            $table->integer('amount');
            $table->INTEGER('stock');
            $table->INTEGER('lot_number');
            $table->enum('stateElement',['excellent','well','regular','malo']);
            $table->enum('state',['available','disabled']);
            $table->string('mark');
            $table->unsignedInteger('inventoryCode');
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
        Schema::dropIfExists('inventories');
    }
}
