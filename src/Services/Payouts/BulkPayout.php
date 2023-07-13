<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait BulkPayout{

    public function bulkBankTransfer(array $data, $version = null)
    {
        ksort($data);
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
             "Authorization" => "Bearer " . $this->secretKey,
             "Encryption" => $signatureKey,
             "Content-Type" => "application/json",
        ])->post($baseUrl . '/bulk_bank_transfer', $data
        )->json();
    }

}
