<?php

class Issue2441
{

    /**
     * This is foo.
     *
     * @var string
     */
    const COMPOUND_A = 'foo',
        COMPOUND_B = 'bar';

    /**
     * This is foo.
     *
     * @var string COMPOUND_A_WITH_NAME
     * @var int COMPOUND_B_WITH_NAME
     */
    const COMPOUND_A_WITH_NAME = 'foo',
        COMPOUND_B_WITH_NAME = 1; // <= BUG.

    /**
     * This is foo.
     *
     * @var string
     */
    public $compound_a = 'foo',
        $compound_b = 'bar';

    /**
     * This is foo.
     *
     * @var string $compound_a_with_name
     * @var int $compound_b_with_name
     */
    protected $compound_a_with_name = 'foo',
        $compound_b_with_name = 1; // <= BUG.
}