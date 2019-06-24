<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->date('year');
            $table->string('email');
            $table->string('phone');
            $table->integer('faculty_id')->unsigned()->index()->nullable();
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('set null');
            $table->integer('president_id')->unsigned()->index()->nullable();
            $table->foreign('president_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('associations');
    }
}
