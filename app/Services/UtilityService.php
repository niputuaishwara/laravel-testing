<?php

namespace App\Services;

class UtilityService
{
    public function countWords($text)
    {
        return str_word_count(trim($text));
    }

    public function kilometersToMiles($km)
    {
        if (!is_numeric($km)) {
            return "Input tidak valid";
        }
        return $km * 0.62;
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