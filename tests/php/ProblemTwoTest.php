<?php
/**
 * Initial version by: Patrick Luca Fazzi
 * Initial version created on: 25/12/2018
 */

namespace Problem\Tests;


use PHPUnit\Framework\TestCase;
use Problem\ProblemTwo;

class ProblemTwoTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array $input
     * @param array $expected
     */
    public function testInvoke(array $input, array $expected): void
    {
        $executor = new ProblemTwo();
        self::assertEquals($expected, $executor($input));
    }

    public function dataProvider(): array
    {
        return [
            [
                [3, 2, 1],
                [2, 3, 6]
            ],
            [
                [1, 2, 3, 4, 5],
                [120, 60, 40, 30, 24],
            ]
        ];
    }
}
