<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageElectricity{

    public function getAllElectricity(array $data=[], $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/electricity', $data
        )->json();
    }

    public function validateElectricity(array $data, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->post(
            $baseUrl . '/electricity/validate', $data
        )->json();
    }

    public function rechargeElectricity(array $data, $version = null)
    {
        ksort($data);
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
            "Authorization" => "Bearer " . $this->secretKey,
            "Encryption" => $signatureKey,
            "Content-Type" => "application/json",
       ])->post($baseUrl . '/electricity/recharge', $data
       )->json();
    }

    
}
