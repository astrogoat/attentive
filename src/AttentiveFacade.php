<?php

namespace Astrogoat\Attentive;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Attentive\Attentive
 */
class AttentiveFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'attentive';
    }
}
