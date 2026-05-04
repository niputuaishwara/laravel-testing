<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\UtilityService;

class UtilityServiceTest extends TestCase
{
    protected $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new UtilityService();
    }

    /** @test */
    public function test_reverse_string()
    {
        $this->assertEquals("olah", $this->service->reverseString("halo"));
        $this->assertEquals("", $this->service->reverseString(""));
    }

    /** @test */
    public function test_calculate_discount()
    {
        $this->assertEquals(90000, $this->service->calculateDiscount(100000, 10));
        $this->assertEquals(100000, $this->service->calculateDiscount(100000, 0));
        $this->assertEquals(0, $this->service->calculateDiscount(100000, 100));
    }

    /** @test */
    public function test_calculate_discount_invalid()
    {
        $this->assertEquals("Input tidak valid", $this->service->calculateDiscount("abc", 10));
        $this->assertEquals("Diskon tidak valid", $this->service->calculateDiscount(100000, 150));
    }

    /** @test */
    public function test_to_upper_case()
    {
        $this->assertEquals("HALO", $this->service->toUpperCase("halo"));
    }

    /** @test */
    public function test_luas_persegi()
    {
        $this->assertEquals(25, $this->service->luasPersegi(5));
    }

    /** @test */
    public function test_is_even()
    {
        $this->assertTrue($this->service->isEven(2));
        $this->assertFalse($this->service->isEven(3));
    }

    /** @test */
    public function test_sha256_digest()
    {
        $this->assertEquals(
            hash('sha256', 'test'),
            $this->service->sha256Digest('test')
        );
    }

    /** @test */
    public function test_md5_digest()
    {
        $this->assertEquals(
            hash('md5', 'test'),
            $this->service->md5Digest('test')
        );
    }
}