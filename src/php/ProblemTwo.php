<?php

namespace Problem;

/**
 * Given an array of integers, return a new array such that each element at index i of the new array is the product
 * of all the numbers in the original array except the one at i.
 *
 * For example, if our input was [1, 2, 3, 4, 5], the expected output would be [120, 60, 40, 30, 24].
 * If our input was [3, 2, 1], the expected output would be [2, 3, 6].
 */
class ProblemTwo
{
    public function __invoke(array $input): array
    {
        return array_map(function ($index) use ($input) {
            unset($input[$index]);
            return array_reduce($input, function ($carry, $value) {
                return $carry * $value;
            }, 1);
        }, range(0, count($input) - 1));
    }
}