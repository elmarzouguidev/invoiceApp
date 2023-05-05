<?php

declare(strict_types=1);

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidGenerator;
use App\Traits\GetModelByUuid;

class Article extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;
    

    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',
        'is_active',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships

    // Helper Methods
}
