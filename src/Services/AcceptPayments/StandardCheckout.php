<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait StandardCheckout{
    
    public function initialiseTransaction(array $data)
    {
        return 'initialise transaction';
    }

}
