<?php

/**
 * Class summary.
 *
 * @property       int    $foo Description of foo.
 * @property-read  bool   $bar Description of bar.
 * @property-write string $baz Description of baz.
 *                             Extended description of baz.
 */
class Issue2439
{
    /**
     * Storage for undeclared properties.
     */
    private $customProps = [];

    /**
     * Getter.
     *
     * @param string $name Property name.
     *
     * @return mixed
     */
    public function __get($name)
    {
        switch ($name) {
            case 'foo':
            case 'bar':
                if (isset($this->customProps[$name])) {
                    return $this->customProps[$name];
                }

                return null;
        }

        throw new Exception("Property $name can not be read");
    }

    /**
     * Setter.
     *
     * @param string $name  Property name.
     * @param mixed  $value New property value.
     *
     * @return mixed
     */
    public function __set($name, $value)
    {
        switch ($name) {
            case 'foo':
            case 'baz':
                $this->customProps[$name] = $value;
                break;
        }

        throw new Exception("Property $name can not be written to");
    }
}
