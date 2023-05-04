<?php

namespace App\Traits;

trait DocumentNumerotator
{
 
    public function getNextDocumentNumberNormal(string $for): string
    {
        if (in_array($for, ['estimate', 'invoice','transaction','compte'])) {
            $startColumn = $for . '_start';
            $prefixColumn = $for . '_prefix';
            $digitColumn = $for . '_digit';
            $dateFormatColumn = $for . '_date_format';
            $delimiterColumn = $for . '_delimiter';

            $prefix = getDocument()->{$prefixColumn};
            $delimiter = getDocument()->{$delimiterColumn};
            $dateFormat = getDocument()->{$dateFormatColumn};
            $next = getDocument()->{$startColumn};
            $digit = getDocument()->{$digitColumn};

            return $prefix . $delimiter . date($dateFormat) .$delimiter. str_pad($next, $digit, '0', STR_PAD_LEFT);
        }

        return '00000';
    }
}
