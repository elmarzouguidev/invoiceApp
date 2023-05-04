<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait PricesTrait
{
    protected function FormatedPriceHt(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->articles->sum('montant_ht'), 2),
        )->shouldCache();
    }

    protected function FormatedPriceTotal(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->articles->sum('montant_ttc'), 2),
        )->shouldCache();
    }

    protected function FormatedPriceTax(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->articles->sum('montant_tax'), 2),
        )->shouldCache();
    }

    protected function FormatedPriceRemise(): Attribute
    {
        return Attribute::make(
            get: fn () => number_format($this->articles->sum('montant_remise'), 2),
        )->shouldCache();
    }

    /***********************************************/

    protected function PriceHt(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->articles->sum('montant_ht'),
        )->shouldCache();
    }

    protected function PriceTotal(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->articles->sum('montant_ttc'),
        )->shouldCache();
    }

    protected function PriceTax(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->articles->sum('montant_tax'),
        )->shouldCache();
    }

    protected function PriceRemise(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->articles->sum('montant_remise'),
        )->shouldCache();
    }
}
