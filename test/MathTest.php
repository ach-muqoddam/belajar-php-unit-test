<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    public function testManual()
    {
        $this->assertEquals(10, Math::sum([5, 5]));
        $this->assertEquals(20, Math::sum([4, 4, 4, 4, 4]));
        $this->assertEquals(9, Math::sum([3, 3, 3]));
        $this->assertEquals(0, Math::sum([]));
        $this->assertEquals(2, Math::sum([2]));
    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        $this->assertEquals($expected, Math::sum($values));
    }

    public static function mathSumData(): array
    {
        return [
            [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[3,3,3], 9],
            [[], 0],
            [[2], 2],
        ];
    }

    /**
     * @testWith [[5,5], 10]
     *           [[4,4,4,4,4], 20]
     *           [[3,3,3], 9]
     *           [[], 0]
     *           [[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        $this->assertEquals($expected, Math::sum($values));
    }
}

?>