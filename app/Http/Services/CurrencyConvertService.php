<?php

namespace App\Http\Services;

class CurrencyConvertService
{
    const RUB = 'rub';
    const EUR = 'eur';
    const USD = 'usd';

    public static function getConvertPrice(Float $price = null): String
    {
        return match (request('currency')) {
            self::RUB => number_format($price * env('RUB', 100), 0, '.', ' ') .' ₽',
            self::USD => '$'. number_format((float)$price * env('USD', 0.9), 2, '.',''),
            self::EUR => '€'. number_format((float)$price , 2, '.',''),
            default => 'Not Found',
        };
    }
}
