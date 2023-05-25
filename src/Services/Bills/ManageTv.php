<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageTv{
    
    public function getAll(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/tv', $data
        )->json();
    }

    public function getpackagesByProvider(string $provider, $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/tv/packages/'. $provider
        )->json();
    }

    public function validateTv(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/tv/validate', $data
        )->json();
    }

    public function payTv(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/tv/pay', $data
        )->json();
    }
}
