<?php

declare(strict_types=1);

namespace App\Models\CRM;

use App\Models\Finance\Estimate;
use App\Models\Finance\Invoice;
use App\Models\Utilities\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidGenerator;
use App\Traits\GetModelByUuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
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
        'code',
        'name',
        'rc',
        'ice',
        'contact',
        'email',
        'telephone',
        'details',
        'address',
        'is_active',
        'is_valid'
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'is_valid' => 'boolean',
    ];

    // Relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function estimates(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
    // Helper Methods

    public function scopeList($query)
    {
        return $query->select($this->fillable);
    }

    public function scopeFindUuid($query, $uuid)
    {
        return $query->whereUuid($uuid);
    }

    public static function boot()
    {
        parent::boot();

        $prefixer = config('invoice-app.clients.prefix');

        static::creating(function ($model) use ($prefixer) {
            $number = (self::max('id') + 1);

            $model->code = $prefixer . str_pad("$number", 4, "0", STR_PAD_LEFT);
        });
    }
}
