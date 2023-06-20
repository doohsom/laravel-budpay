<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait VerifyPayout{

    public function verifyPayout(string $reference, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/payout/'. $reference
        )->json();
    }

    public function getPayoutTransfers(array $data=[])
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/list_transfers', $data
        )->json();
    }

}
