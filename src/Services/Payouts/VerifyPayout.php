<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait VerifyPayout{

    public function verifyPayout(string $reference)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/payout/'. $reference
        )->json();
    }

    public function getPayoutTransfers(array $data=[])
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/list_transfers', $data
        )->json();
    }

}
