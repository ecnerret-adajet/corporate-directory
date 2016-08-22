<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        
        Schema::create('department_directory', function (Blueprint $table){
            $table->integer('department_id')->unsigned()->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            
            
            $table->integer('directory_id')->unsigned()->index();
            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');
            
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
        Schema::drop('department_directory');
        Schema::drop('departments');
    }
}
