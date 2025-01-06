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

    public function testIncrement()
    {
        self::assertSame(0, $this->counter->getCounter());
        
        //menandai incomplete test
        self::markTestIncomplete("do counter again"); 
    }

    // membuat function implementasi unit test
    public function testCounter()
    {   
        $this->counter->increment();
        Assert::assertSame(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertSame(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertSame(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {
        self::markTestSkipped("Masih ada error yg bingung");

        $this->counter->increment();
        Assert::assertSame(1, $this->counter->getCounter());
    }

    public function testFirst():Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertSame(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertSame(2, $counter->getCounter());
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

    /**
     * @requires OSFAMILY Darwin
     */
    public function testOnlyMac()
    {
        self::assertTrue(true, " Only in Mac ");
    }

}

?>