<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageElectricity{

    public function getAllElectricity(array $data=[])
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/electricity', $data
        )->json();
    }

    public function validateElectricity(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/electricity/validate', $data
        )->json();
    }

    public function rechargeElectricity(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/electricity/recharge', $data
        )->json();
    }
}
