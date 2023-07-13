<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageTv{
    
    public function getAll(array $data=[], $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/tv', $data
        )->json();
    }

    public function getpackagesByProvider(string $provider, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/tv/packages/'. $provider
        )->json();
    }

    public function validateTv(array $data, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->post(
            $baseUrl . '/tv/validate', $data
        )->json();
    }

    public function payTv(array $data, $version = null)
    {
        ksort($data);
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
            "Authorization" => "Bearer " . $this->secretKey,
            "Encryption" => $signatureKey,
            "Content-Type" => "application/json",
       ])->post($baseUrl . '/tv/pay', $data
       )->json();
    }
}
