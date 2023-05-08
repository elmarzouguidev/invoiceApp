<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait PricesTrait
{
    protected function FormatedTotalPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->articles->sum('total_price'), 2),
        )->shouldCache();
    }

    /***********************************************/

    protected function TotalPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->articles->sum('total_price'),
        )->shouldCache();
    }
}
