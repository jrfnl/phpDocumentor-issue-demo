<?php

/**
 * Class summary.
 *
 * @method static int[]    foo()            Description of foo.
 * @method static string[] bar(string $arg) Description of bar.
 *                                          More details about bar.
 */
class Issue2438
{
    /**
     * Method summary.
     *
     * @param string $name Method name.
     * @param array  $args Unused.
     *
     * @return array|false
     */
    public static function __callStatic($name, $args)
    {
        switch ($name) {
            case 'foo':
                return [1, 2, 3];
            case 'bar':
                return ['a', 'b', 'c'];
        }

        return false;
    }
}
