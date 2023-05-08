<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->morphs('articleable');

            $table->unsignedBigInteger('position')->default(0);

            $table->longText('designation')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->decimal('unit_price', 13, 2)->default(0);
            $table->decimal('total_price', 13, 2)->default(0);
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
