<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('directory_status', function(Blueprint $table){

             $table->integer('directory_id')->unsigned()->index();
            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');


              $table->integer('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

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
        Schema::drop('directory_status');
        Schema::drop('statuses');
    }
}
