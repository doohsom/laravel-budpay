<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageInternet{

    public function getAllInternet(array $data=[])
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/internet', $data
        )->json();
    }

    public function getPlansByProvider(string $provider)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/internet/plans/' . $provider, $data
        )->json();
    }

    public function data(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/internet/data', $data
        )->json();
    }

}
