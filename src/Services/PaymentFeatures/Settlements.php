<?php

namespace Doohsom\Budpay\Services\PaymentFeatures;

use PaymentFeaure;
use Illuminate\Support\Facades\Http;

trait Settlements{

    public function getAllSettlements(array $data=[])
    {
        return 'get all settlements';
    }

    public function findSettlement(array $data=[])
    {
        return 'find a settlement';
    }
}
