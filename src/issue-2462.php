<?php

class Issue2462
{
    /**
     * Method Summary.
     *
     * Long description.
     *
     * @since 1.0.0 Introduction version.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The PHP_CodeSniffer file where the
     *                                               token was found.
     * @param int                         $openPtr   The position of the array opener token in the token stack.
     * @param int                         $closePtr  The position of the array closer token in the token stack.
     *
     * @return true|void Returning `TRUE` will short-circuit the sniff and stop processing.
     */
    public function processOpenClose(File $phpcsFile, $openPtr, $closePtr)
    {
    }
}
