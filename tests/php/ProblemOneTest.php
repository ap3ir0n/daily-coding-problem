<?php
/**
 * Initial version by: Patrick Luca Fazzi
 * Initial version created on: 25/12/2018
 */

namespace Problem\Tests;

use PHPUnit\Framework\TestCase;
use Problem\ProblemOne;

class ProblemOneTest extends TestCase
{

    /**
     * @dataProvider dataProvider
     */
    public function testInvoke($numbers, $k, $expected)
    {
        $executor = new ProblemOne();
        self::assertEquals($expected, $executor($numbers, $k));
    }

    public function dataProvider(): array
    {
        return [
            [ [10, 15, 3, 7], 17, true ],
            [ [10, 15, 3, 7], 25, true ],
            [ [10, 15, 3, 7], 26, false ],
            [ [10, 15, 3, 7], 6, false ],
        ];
    }
}
