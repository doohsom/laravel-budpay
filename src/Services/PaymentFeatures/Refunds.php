<?php

namespace Doohsom\Budpay\Services\PaymentFeatures;

use PaymentFeaure;
use Illuminate\Support\Facades\Http;

trait Refunds{

    public function createRefunds(array $data)
    {
        return 'create refunds';
    }

    public function getAllRefunds(array $data=[])
    {
        return 'list all refunds';
    }

    public function findRefund(array $data=[])
    {
        return 'find refund';
    }
}
