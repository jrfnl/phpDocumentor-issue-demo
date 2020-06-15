<?php

class Issue546 {

    /**
     * Summary.
     *
     * @param array $param An array with items.
     *                     This should be either the output of a previous call to this method
     *                     or the output of an earlier call to the {@see Issue546::bar()} method.
     *
     * @return array A multi-level array containing array with items combined with
     *               the previously collected items.
     *               See {@see Issue546::bar()} for more details about the array format.
     */
    public static function foo($param) {}

    /**
     * Summary.
     *
     * Description containing a specification of the returned array.
     */
    public function bar($param) {}
}
