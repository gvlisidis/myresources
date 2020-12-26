<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworkResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('framework_resource', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('framework_id');
            $table->unsignedBigInteger('resource_id');
            $table->timestamps();

            $table->foreign('framework_id')->references('id')->on('frameworks');
            $table->foreign('resource_id')->references('id')->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('framework_resource');
    }
}
