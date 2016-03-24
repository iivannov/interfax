<?php

namespace Iivannov\InterFax\Support\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see Iivannov\InterFax\InterFax
 */
class InterFax extends Facade {

    protected static function getFacadeAccessor() { return 'interfax'; }

}