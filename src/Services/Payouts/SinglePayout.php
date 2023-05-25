<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait SinglePayout{

    public function bankTransfer(array $data, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        ksort($data);
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
            "Authorization" => "Bearer " . $this->secretKey,
            "Encryption" => $signatureKey,
            "Content-Type" => "application/json",
       ])->post(
            $baseUrl . '/bank_transfer', $data
        )->json();
    }

}
