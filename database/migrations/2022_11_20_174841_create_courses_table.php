<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido')->nullable();;
            $table->double('precio',8,2);
            $table->string('user_id')->nullable();
            $table->integer('enrolled_amount')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('users');
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
        Schema::dropIfExists('courses');
    }
}

