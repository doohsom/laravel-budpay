<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait WalletTransaction{

    public function getWalletTransactionsByCurrency(array $data=[])
    {
        return 'wallet transaction by currency';
    }

}
