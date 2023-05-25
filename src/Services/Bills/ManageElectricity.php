<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageElectricity{

    public function getAllElectricity(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/electricity', $data
        )->json();
    }

    public function validateElectricity(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/electricity/validate', $data
        )->json();
    }

    public function rechargeElectricity(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/electricity/recharge', $data
        )->json();
    }
}
