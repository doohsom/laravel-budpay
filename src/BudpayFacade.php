<?php

namespace Doohsom\Budpay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Doohsom\Budpay\Skeleton\SkeletonClass
 */
class BudpayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'budpay';
    }
}
