<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait ServerToServer{
    
    public function testEncryption(array $data)
    {
        return 'test encryption';
    }

    public function initialiseS2STransaction(array $data)
    {
        return 'initialise s2s transaction';
    }
}
