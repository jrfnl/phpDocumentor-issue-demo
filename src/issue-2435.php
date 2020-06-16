<?php
class Issue2435
{
    /* ==========================================
     * =            CONSTANTS                   =
     * ==========================================*/

    /* ======= PUBLIC CONSTANTS ======= */

    const CONST_NO_SPECS = 'foo';

    /**
     * @api
     */
    const API_CONST = 'foo';

    /**
     * @internal
     */
    const INTERNAL_CONST = 'foo';

    /**
     * @ignore
     */
    const IGNORED_CONST = 'foo';

    public const PUBLIC_CONST = 'foo';

    /* ======= PROTECTED CONSTANTS ======= */

    protected const PROTECTED_CONST = 'foo';

    /* ======= PRIVATE CONSTANTS ======= */

    private const PRIVATE_CONST = 'foo';

    /* ==========================================
     * =            PROPERTIES                  =
     * ==========================================*/

    /* ======= PUBLIC PROPERTIES ======= */

    var $prop_no_specs = 'foo';
    public $public_prop = 'foo';

    /**
     * @api
     */
    public $api_public_prop = 'foo';

    /**
     * @internal
     */
    public $internal_public_prop = 'foo';

    /**
     * @ignore
     */
    var $ignored_prop = 'foo';

    /* ======= PROTECTED PROPERTIES ======= */

    protected $protected_prop = 'foo';

    /**
     * @api
     */
    protected $api_protected_prop = 'foo';

    /**
     * @internal
     */
    protected $internal_protected_prop = 'foo';

    /* ======= PRIVATE PROPERTIES ======= */

    private $private_prop = 'foo';

    /**
     * @api
     */
    private $api_private_prop = 'foo';

    /**
     * @internal
     */
    private $internal_private_prop = 'foo';


    /* ==========================================
     * =            METHODS                     =
     * ==========================================*/

    /* ======= PUBLIC METHODS ======= */

    function method_no_specs() {}

    public function public_method() {}

    /**
     * @api
     */
    public function api_public_method() {}

    /**
     * @internal
     */
    public function internal_public_method() {}

    /**
     * @ignore
     */
    function ignored_method() {}

    /* ======= PROTECTED METHODS ======= */

    protected function protected_method() {}

    /**
     * @api
     */
    protected function api_protected_method() {}

    /**
     * @internal
     */
    protected function internal_protected_method() {}

    /* ======= PRIVATE METHODS ======= */

    private function private_method() {}

    /**
     * @api
     */
    private function api_private_method() {}

    /**
     * @internal
     */
    private function internal_private_method() {}
}
