<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageTv{
    
    public function getAll(array $data=[])
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/tv', $data
        )->json();
    }

    public function getpackagesByProvider(string $provider)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/tv/packages/'. $provider, $data
        )->json();
    }

    public function validateTv(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/tv/validate', $data
        )->json();
    }

    public function payTv(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/tv/pay', $data
        )->json();
    }
}
