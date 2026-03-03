<?php
/**
 * Tests for BlockFusion
 */

use PHPUnit\Framework\TestCase;
use Blockfusion\Blockfusion;

class BlockfusionTest extends TestCase {
    private Blockfusion $instance;

    protected function setUp(): void {
        $this->instance = new Blockfusion(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockfusion::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
