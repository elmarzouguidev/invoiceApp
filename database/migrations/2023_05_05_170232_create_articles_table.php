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
            $table->unsignedBigInteger('position')->default(0);

            $table->morphs('articleable');

            $table->longText('designation')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);

            $table->decimal('prix_unitaire', 12, 2)->default(0);
            $table->decimal('montant_ht', 12, 2)->default(0);
            $table->decimal('montant_remise', 12, 2)->default(0);
            $table->decimal('montant_tax', 12, 2)->default(0);
            $table->decimal('montant_ttc', 12, 2)->default(0);
            $table->unsignedBigInteger('remise')->default(0);
            $table->unsignedBigInteger('tax')->default(0);
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
