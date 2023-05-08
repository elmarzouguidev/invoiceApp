<?php

declare(strict_types=1);

namespace App\Models\Finance;

use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidGenerator;
use App\Traits\GetModelByUuid;
use App\Traits\PricesTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Invoice extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    use PricesTrait;


    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',
        'document_number',
        'status',
        'total_price',
        'is_send',
        'is_active',
        'due_date',
        'document_date',
        'notes',
        'customer_id',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'total_price' => 'float'
    ];

    // Relationships
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function articles(): MorphMany
    {
        return $this->morphMany(Article::class, 'articleable')->orderBy('position');
    }
    // Helper Methods

    public function scopeList($query)
    {
        return $query->select(['id', 'uuid', 'document_date', 'due_date', 'price_total', 'customer_id']);
    }
}
