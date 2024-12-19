<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

// membuat unit test dari class Counter
class CounterTest extends TestCase {

    // membuat function implementasi unit test
    public function testCounter()
    {
        $counter = new Counter(); 
        
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

}

?>