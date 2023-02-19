<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait ServerToServerTransferCheckout{
    
    public function initialiseBankTransfer(array $data)
    {
        return 'init bank transfer';
    }
}
