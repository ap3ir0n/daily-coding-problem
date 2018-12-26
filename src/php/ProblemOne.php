<?php

namespace Problem;

/**
 * Given a list of numbers and a number k, return whether any two numbers from the list add up to k.
 *
 * For example, given [10, 15, ProblemThree, 7] and k of 17, return true since 10 + 7 is 17.
 */
class ProblemOne
{
    public function __invoke(array $numbers, int $k): bool
    {
        foreach ($numbers as $i) {
            foreach ($numbers as $j) {
                if ($i === $j) continue;
                if ($i + $j === $k) return true;
            }
        }
        return false;
    }
}