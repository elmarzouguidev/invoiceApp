<?php

use Carbon\Carbon;

if (!function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name');
    }
}

if (!function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     *
     * @return Carbon
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        return auth()->check() && auth()->user()->hasRole('SuperAdmin') ? true : false;
    }
}

/**
 * Helper to only return digits, extract commas, etc.
 *
 * @param  string|null  $text
 * @return float
 */
if (!function_exists('onlyNumbers')) {
    function onlyNumbers(?string $text): float
    {
        if (!$text) {
            return 0;
        }

        return (float) preg_replace('/[^0-9.-]/', '', $text);
    }
}

if (!function_exists('LoadFromURL')) {
    function LoadFromURL($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}
