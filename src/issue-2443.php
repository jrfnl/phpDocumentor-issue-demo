<?php

class Issue2443
{
    /**
     * Summary.
     *
     * @var string
     */
    const DOCBLOCK_LONG_STRING_VALUE = '
    <div>
        <p>This is a long string, spanning multiple lines.</p>
        <p>%1$s</p>
        <p>%2$s</p>
    </div>';

    /**
     * Summary.
     *
     * @var string
     */
    const DOCBLOCK_LONG_NOWDOC_VALUE = <<<'EOD'
This is a really long string, spanning multiple lines.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus sed sem vel pulvinar.
Maecenas sit amet sapien sed quam porttitor condimentum. Nulla ac nisi et lectus facilisis
sollicitudin. Suspendisse potenti. In ac sollicitudin urna, sed molestie augue. Nulla posuere
risus vitae lacinia tristique. Donec lacinia, ipsum non bibendum vehicula, neque mi sodales
lacus, at facilisis nisl ex a elit. Suspendisse egestas purus dui, sed egestas lorem aliquam
a. Fusce varius nulla vel ex egestas rhoncus. Quisque vulputate, diam quis iaculis rutrum,
quam magna lacinia urna, sit amet euismod lacus velit quis turpis.
EOD;

    /**
     * Summary.
     *
     * @var string[]
     */
    const DOCBLOCK_ARRAY_VALUE = [
        'a' => 'foo',
        'b' => 'bar',
        'c' => 'baz',
        'd' => 'fool',
        'e' => 'bal',
        'f' => 'food',
        'g' => 'bat',
        'h' => 'for',
        'i' => 'bah',
        'j' => 'foz',
        'k' => 'yoh!',
    ];
}
