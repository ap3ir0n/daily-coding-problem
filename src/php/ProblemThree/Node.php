<?php
/**
 * Initial version by: Patrick Luca Fazzi
 * Initial version created on: 26/12/2018
 */

namespace Problem\ProblemThree;


class Node
{
    public $val;
    public $left;
    public $right;

    /**
     * Node constructor.
     * @param $val
     * @param $left
     * @param $right
     */
    public function __construct($val, Node $left = null, Node $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}