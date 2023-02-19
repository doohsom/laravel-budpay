<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait WalletBalance{

    public function getWalletBalanceByCurrency(array $data=[])
    {
        return 'wallet balacne by currency';
    }

}
