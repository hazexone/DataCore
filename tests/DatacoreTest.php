<?php
/**
 * Tests for DataCore
 */

use PHPUnit\Framework\TestCase;
use Datacore\Datacore;

class DatacoreTest extends TestCase {
    private Datacore $instance;

    protected function setUp(): void {
        $this->instance = new Datacore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datacore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
