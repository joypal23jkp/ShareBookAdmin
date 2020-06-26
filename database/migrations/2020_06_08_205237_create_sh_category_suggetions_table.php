<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShCategorySuggetionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sh_category_suggetions', function (Blueprint $table) {
            $table->id();
            $table->string('sh_Category');
            $table->unsignedBigInteger('sh_id');
            $table->foreign('sh_id')->references('id')->on('service_holders');
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
        Schema::dropIfExists('sh_category_suggetions');
    }
}
