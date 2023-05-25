<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageInternet{

    public function getAllInternet(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/internet', $data
        )->json();
    }

    public function getPlansByProvider(string $provider, $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/internet/plans/' . $provider
        )->json();
    }

    public function data(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/internet/data', $data
        )->json();
    }

}
