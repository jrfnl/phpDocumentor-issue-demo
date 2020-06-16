<?php

class Issue2440
{
    /**
     * Internal function.
     *
     * - This function shouldn't show in the docs, except with `--visibility=internal`.
     *
     * @internal
     *
     * @return bool
     */
    function internalWithoutDescription() {}

    /**
     * Is this an internal function or a dev note ?
     *
     * If this means it's an internal function:
     * - This function shouldn't show in the docs, except with `--visibility=internal`.
     * - When `--visibility=internal` is used, the dev note is shown and the inline tag resolved correctly.
     *
     * If this means it's a dev-note:
     * - This function should show in the docs like normal.
     * - The dev note should not show in the docs.
     *
     * @internal With a description. Is this an internal function or a dev note ?
     *           See {@see Issue2440::inlineInternal()}. This doesn't work - open issue#546.
     *
     * @return bool
     */
    function internalWithDescription() {}

    /**
     * Function with a inline dev notes.
     *
     * - This function should show in the docs like normal.
     * - The dev notes should not show in the docs.
     *
     * {@internal Dev note with single closing brace.}
     *
     * {@internal Dev note old-style, double closing brace.}}
     *
     * @return bool
     */
    function inlineInternal() {}

    /**
     * Function with a inline dev notes.
     *
     * - This function should show in the docs like normal.
     * - The dev note should not show in the docs.
     * - When `--parseprivate` is used, the dev note is shown and the inline tag resolved correctly.
     *
     * {@internal Dev note old-style, see {@see Issue2440::inlineInternal()} for brace style check.}}
     *
     * @return bool
     */
    function inlineInternalWithNestedTags() {}
}
