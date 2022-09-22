<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driverid')->references('id')->on('drivers');
            $table->foreignId('shipment_id');
            $table->string("thumbnail")->nullable();
            $table->string('price');
            $table->string('description');
            $table->timestamps();
        });
        
        DB::statement('ALTER TABLE voyages ADD CONSTRAINT FK Foreign key (shipment_id) references shipments(id) ON DELETE CASCADE');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
