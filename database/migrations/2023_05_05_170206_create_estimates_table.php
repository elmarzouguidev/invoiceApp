<?php

declare(strict_types=1);

use App\Models\CRM\Customer;
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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignIdFor(Customer::class)->nullable()->index()->constrained()->nullOnDelete();

            $table->string('document_number')->unique()->nullable();

            $table->unsignedInteger('status')->default(0);

            $table->decimal('total_price', 13, 2)->default(0)->nullable();

            $table->date('document_date')->nullable();
            $table->date('due_date')->nullable();

            $table->longText('notes')->nullable();

            $table->boolean('is_invoiced')->default(false);
            $table->boolean('is_send')->default(false);
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
        Schema::dropIfExists('estimates');
    }
};
