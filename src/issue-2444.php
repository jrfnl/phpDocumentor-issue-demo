<?php

class Issue2444
{
   /**
    * Testing 1-2-3.
    *
    * @param Example     $correct
    * @param int         $mismatchedType
    * @param string|null $wrongParamName
    * @param callable    $thirdParamAsFourth
    * @param type        $doesntExistAndType
    *
    * @return void
    */
   public function foo(Example $correct, bool $mismatchedType, ?string $thirdParamAsFourth = '') {}

   /**
    * Testing 1-2-3.
    *
    * @param Example $correct
    *
    * @return void
    */
   public function bar(Example $correct, bool $missingTag) {}
}
