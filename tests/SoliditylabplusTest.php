<?php
/**
 * Tests for SolidityLabPlus
 */

use PHPUnit\Framework\TestCase;
use Soliditylabplus\Soliditylabplus;

class SoliditylabplusTest extends TestCase {
    private Soliditylabplus $instance;

    protected function setUp(): void {
        $this->instance = new Soliditylabplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditylabplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
