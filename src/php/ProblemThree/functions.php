<?php
namespace Problem\ProblemThree;

function deserialize(?string $serialized): ?Node
{
    if (null === $serialized) return null;

    ['val' => $val, 'left' => $left, 'right' => $right] = json_decode($serialized, true);

    return new Node(
        $val,
        deserialize($left),
        deserialize($right)
    );
}

function serialize(?Node $node): ?string
{
    if (null === $node) return null;

    return json_encode([
        'val' => $node->val,
        'left' => serialize($node->left),
        'right' => serialize($node->right),
    ]);
}