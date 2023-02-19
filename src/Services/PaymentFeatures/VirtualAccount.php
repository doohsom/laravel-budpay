<?php

namespace Doohsom\Budpay\Services\PaymentFeatures;

use PaymentFeaure;
use Illuminate\Support\Facades\Http;

trait VirtualAccount{

    public function createVirtualAccount(array $data)
    {
        return 'create virtual account';
    }

    public function getAllVirtualAccounts(array $data=[])
    {
        return 'get all virtual accounts';
    }

    public function findAVirtualAccount(array $data=[])
    {
        return 'find a virtual account';
    }
}
