<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

// membuat unit test dari class Counter
class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }
    // membuat function implementasi unit test
    public function testCounter()
    {   
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst():Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
        $this->counter = new Counter();
        echo "TearDown" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        $this->counter = new Counter();
        echo "After" . PHP_EOL;
    }

}

?>