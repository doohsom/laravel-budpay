<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait VerifyTransaction{
    
    public function verifyTransactionWithReference(array $data=[])
    {
        return 'verify transaction with reference';
    }
}
