<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateK100Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('k100s', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('product_name', 100);
        //     $table->string('product_type', 40); //Normal Profile Switches, Low Profile Switches, Ultra-Low Profile Switches
        //     $table->string('description', 2000);
        //     $table->string('size', 10); //100%, 96%, 80%, 75%, 60%
        //     $table->string('connectivity', 10); //wired, wireless
        //     $table->string('switch', 10); //red, blue, brown
        //     $table->string('stock', 5);
        //     $table->double('price');
        //     $table->string('main_image', 20);
        //     $table->string('sub_image_1', 20)->nullable();
        //     $table->string('display_1', 10)->default('none');
        //     $table->string('sub_image_2', 20)->nullable();
        //     $table->string('display_2', 10)->default('none');
        //     $table->string('sub_image_3', 20)->nullable();
        //     $table->string('display_3', 10)->default('none');
        //     $table->string('sub_image_4', 20)->nullable();
        //     $table->string('display_4', 10)->default('none');
        //     $table->string('sub_image_5', 20)->nullable();
        //     $table->string('display_5', 10)->default('none');
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
        Schema::dropIfExists('k100s');
    }
}
