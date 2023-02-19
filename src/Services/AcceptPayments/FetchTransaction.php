<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait FetchTransaction{
    
    public function findTransaction(array $data=[])
    {
        return 'find transaction';
    }

    public function queryTransaction(array $data=[])
    {
        return 'query transaction';
    }

    public function getAllTransaction(array $data=[])
    {
        return 'get all transaction';
    }
}
