<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait WalletBalance{

    public function getWalletBalanceByCurrency(string $currency)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/wallet_balance/'. $currency
        )->json();
    }

}
