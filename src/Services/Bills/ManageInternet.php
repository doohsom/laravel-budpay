<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageInternet{

    public function getAllInternet(array $data=[], $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/internet', $data
        )->json();
    }

    public function getPlansByProvider(string $provider, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->get(
            $baseUrl . '/internet/plans/' . $provider
        )->json();
    }

    public function topUpInternet(array $data, $version = null)
    {
        ksort($data);
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        return Http::withHeaders([
            "Authorization" => "Bearer " . $this->secretKey,
            "Encryption" => $signatureKey,
            "Content-Type" => "application/json",
       ])->post($baseUrl . '/internet/data', $data
       )->json();
    }
}
