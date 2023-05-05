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
            $table->uuid()->unique()->nullable();

            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('email')->unique();
            $table->string('telephone')->nullable()->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->rememberToken();
            $table->boolean('active')->default(true);

            $table->timestamps();
            $table->softDeletes();
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
