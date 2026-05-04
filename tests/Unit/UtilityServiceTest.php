<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\UtilityService;

class UtilityServiceTest extends TestCase
{
    public function test_count_words()
    {
        $service = new UtilityService();
        $this->assertEquals(4, $service->countWords("My name is Joko"));
    }

    public function test_km_to_miles()
    {
        $service = new UtilityService();
        $this->assertEquals(6.2, $service->kilometersToMiles(10));
    }
    public function test_uppercase()
{
    $service = new UtilityService();
    $this->assertEquals("HELLO", $service->toUpperCase("hello"));
}

public function test_luas_persegi()
{
    $service = new UtilityService();
    $this->assertEquals(25, $service->luasPersegi(5));
}

public function test_is_even()
{
    $service = new UtilityService();
    $this->assertTrue($service->isEven(4));
}
}