<?php

declare(strict_types=1);

use App\Models\Utilities\Category;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignIdFor(Category::class)->index()->nullable()->constrained()->nullOnDelete();

            $table->string('code')->unique()->nullable();
            $table->string('name')->unique();

            $table->string('rc', 70)->unique()->nullable();
            $table->string('ice', 90)->unique()->nullable();

            $table->string('email')->nullable()->unique();
            $table->string('telephone', 100)->nullable()->unique();
            $table->longText('address')->nullable();
            $table->longText('details')->nullable();

            $table->boolean('is_active')->default(true);
            $table->boolean('is_valid')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
