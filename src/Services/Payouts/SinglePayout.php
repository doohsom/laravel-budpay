<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait SinglePayout{

    public function bankTransfer(array $data)
    {
        return 'bank transfer';
    }

}
