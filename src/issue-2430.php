<?php

class Issue2430 {

    /**
     * Retrieve information.
     *
     * The return value is in the following format:
     *
     * <code>
     * 0 => array(
     *   'name'  => '$var',  // The variable name.
     *   'token' => integer, // The stack pointer to the variable name.
     * )
     * </code>
     *
     * @return array
     */
    function foo() {}
}
