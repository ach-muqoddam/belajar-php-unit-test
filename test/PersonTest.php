<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void
    {
        
    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Adam");
    }

    public function testSuccess()
    {
        
        $this->assertEquals("Hello Hamid, my name is Adam", $this->person->sayHello("Hamid"));
    }

    public function testException()
    {
        
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput()
    {
        
        $this->expectOutputString("Good bye Hamid" . PHP_EOL);
        $this->person->sayGoodBye("Hamid");
    }
}

?>