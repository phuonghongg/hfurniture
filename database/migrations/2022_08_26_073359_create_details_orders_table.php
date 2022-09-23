<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_orders', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id_orders');
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
            $table->string('address');
            $table->integer('total');

            //foreign key
            $table->foreign('id_orders')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_orders');
    }
};
