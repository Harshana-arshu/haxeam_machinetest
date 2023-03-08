<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id')->nullable();
            $table->integer('division_id')->nullable();
            $table->string('student_name')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('student_detail');
    }
};
