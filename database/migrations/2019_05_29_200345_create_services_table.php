<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('price', 8, 2);
            $table->boolean('is_exact_price')->default(true);
            $table->integer('order')->nullable();
            $table->integer('column_width')->default(12);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
