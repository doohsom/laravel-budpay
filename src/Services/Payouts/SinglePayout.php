<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait SinglePayout{

    public function bankTransfer(array $data)
    {
        ksort($data);
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
            "Authorization" => "Bearer " . $this->secretKey,
            "Encryption" => $signatureKey,
            "Content-Type" => "application/json",
       ])->post(
            $this->baseUrl . '/bank_transfer', $data
        )->json();
    }

}
