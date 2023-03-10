<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
            $tabel->string('free_text')->nullable();
=======

            $table->integer('grade')->nullable();
            $table->string('faculty_and_department')->nullable();
            $table->string('free_text')->nullable();
            $table->string('icon')->nullable();
>>>>>>> 2cf223a1d83ecbdc1860b3cec6927e9928d62f93
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
