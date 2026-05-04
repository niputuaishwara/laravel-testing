<?php

namespace App\Services;

class UtilityService
{
    public function reverseString($text)
    {
        return strrev($text);
    }

    public function calculateDiscount($harga, $diskon)
    {
        if (!is_numeric($harga) || !is_numeric($diskon)) {
            return "Input tidak valid";
        }

        if ($diskon < 0 || $diskon > 100) {
            return "Diskon tidak valid";
        }

        return $harga - ($harga * $diskon / 100);
    }

    public function sha256Digest($text)
    {
        return hash('sha256', $text);
    }

    public function md5Digest($text)
    {
        return hash('md5', $text);
    }

    public function toUpperCase($text)
    {
        return strtoupper($text);
    }

    public function luasPersegi($sisi)
    {
        return $sisi * $sisi;
    }

    public function isEven($angka)
    {
        return $angka % 2 == 0;
    }
}