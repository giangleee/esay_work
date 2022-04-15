<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->longText('description');
            $table->unsignedDecimal('process', 5, 2);
            $table->unsignedInteger('budget');
            $table->date('end');
            $table->unsignedSmallInteger('status')->comment('0: not finish, 1: process, 2: done');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
