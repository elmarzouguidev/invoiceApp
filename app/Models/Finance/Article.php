<?php

declare(strict_types=1);

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidGenerator;
use App\Traits\GetModelByUuid;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Article extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;

    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'id',
        'uuid',
        'articleable_id',
        'articleable_type',
        'designation',
        'description',
        'quantity',
        'unit_price',
        'total_price',
        'position',
    ];

    protected $casts = [
        'quantity' => 'integer',
    ];

    public function articleable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getFormatedUnitPriceAttribute(): string
    {
        return number_format($this->unit_price, 2);
    }

    public function getFormatedTotalPriceAttribute(): string
    {
        return number_format($this->total_price, 2);
    }
}
