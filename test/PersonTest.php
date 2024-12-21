<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Adam");
        $this->assertEquals("Hello Hamid, my name is Adam", $person->sayHello("Hamid"));
    }

    public function testException()
    {
        $person = new Person("Adam");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }
}

?>