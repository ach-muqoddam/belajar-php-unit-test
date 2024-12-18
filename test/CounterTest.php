<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;

// membuat unit test dari class Counter
class CounterTest extends TestCase {

    // membuat function implementasi unit test
    public function testCounter()
    {
        $counter = new Counter(); 
        $counter->increment();
        $counter->increment();
        echo $counter->getCounter() . PHP_EOL;
    }

}

?>