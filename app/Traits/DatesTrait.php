<?php

namespace App\Traits;

use Illuminate\Support\Carbon;

trait DatesTrait
{
    public function setDocumentDateAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['document_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    public function setDueDateAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['due_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    public function setPaymentDateAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['payment_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    public function getIsDueAttribute(): bool
    {
        return $this->due_date->lessThanOrEqualTo(Carbon::now());
    }

    public function setTransactionDateAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['transaction_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }

    public function setValueDateAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['value_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }
    }
}
