<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
