<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageAirtime{

    public function getAllAirtime(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/airtime', $data
        )->json();
    }

    public function topUpAirtime(array $data, $version = null)
    {
        ksort($data);
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
             "Authorization" => "Bearer " . $this->secretKey,
             "Encryption" => $signatureKey,
             "Content-Type" => "application/json",
        ])->post($this->baseUrl . '/airtime/topup', $data
        )->json();
    }
}
