<?php

class Issue2442
{
    public $nodocblock = 'foo';

    /**
     * Summary.
     */
    public $docblock_novar = 'foo';

    public string $nodocblock_typed = 'foo';

    /**
     * Summary.
     *
     * @var string
     */
    public $docblock_var = 'foo';

    /**
     * Summary.
     */
    public function foo() {}
}
