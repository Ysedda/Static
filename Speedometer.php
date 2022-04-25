<?php

class Speedometer
{
    public const KMS_CONVERSION = 1.60934;

    public static function convertKmToMiles(float $distance): float
    {
        return round($distance / self::KMS_CONVERSION, 2);
    }

    public static function convertMilesToKm(float $distance): float
    {
        return round($distance * self::KMS_CONVERSION, 2);
    }
}
