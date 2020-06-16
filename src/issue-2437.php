<?php
class Issue2437
{
    public $public_prop = 'foo';
    protected $protected_prop = 'foo';
    private $private_prop = 'foo';

    /**
     * @api
     */
    public $api_public_prop = 'foo';

    /**
     * @internal
     */
    public $internal_public_prop = 'foo';

    public function public_method() {}
    protected function protected_method() {}
    private function private_method() {}

    /**
     * @api
     */
    public function api_public_method() {}

    /**
     * @internal
     */
    public function internal_public_method() {}
}
