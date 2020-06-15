<?php

abstract class Issue2432 {
    /**
     * Process the array opener and closer.
     *
     * @return true|void Returning `true` will short-circuit the sniff and stop processing.
     */
    abstract public function processOpenClose();

    /**
     * Do something
     *
     * @param int|false $param Integer or false to skip this check.
     *
     * @return int|false Integer or false when the logic ran into a problem.
     */
    public function processSomething($param) {}
}
