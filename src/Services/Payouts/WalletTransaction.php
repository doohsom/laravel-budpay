<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait WalletTransaction{

    public function getWalletTransactionsByCurrency(string $currency, $version = null)   
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/wallet_transactions/'. $currency
        )->json();
    }

}
