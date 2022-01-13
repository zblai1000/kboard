<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cart_storage', function (Blueprint $table) {
        //     $table->string('id')->index();
        //     $table->longText('cart_data');
        //     $table->timestamps();
        //     $table->primary('id');
        // });

        // Schema::create('cart_storage', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->json('cart_data');
        //     $table->integer('user_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_storage');
    }
}
