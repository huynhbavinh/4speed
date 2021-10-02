<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moto_cycles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('title');
            $table->string('thumbnail');
            $table->integer('category_id');
            $table->json('specifications');
            $table->text('detail');
            $table->json('options');
            $table->json('path');
            $table->integer('user_id');
            $table->boolean('is_hot')->default(false);

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
        Schema::dropIfExists('moto_cycles');
    }
}
