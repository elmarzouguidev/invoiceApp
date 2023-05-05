<?php

declare(strict_types=1);

namespace App\Models\Utilities;

use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidGenerator;
use App\Traits\GetModelByUuid;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;


    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'description',
        'is_active',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
    // Helper Methods
}
