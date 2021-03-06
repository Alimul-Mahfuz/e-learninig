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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('teacher_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('dob');
            $table->string('gender');
            $table->string('degree');
            $table->string('address')->nullable();
            $table->unsignedBigInteger('account_id');
            $table->string('profile_image')->nullable();
            $table->foreign('account_id')->references('account_id')->on('accounts');
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
        Schema::dropIfExists('teachers');
    }
};
