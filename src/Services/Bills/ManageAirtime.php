<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageAirtime{

    public function getAllAirtime(array $data=[])
    {
        $allAirtime = Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/airtime',
            $data
        )->json();

        return $allAirtime;
    }

    public function topUpAirtime(array $data)
    {
        ksort($data);
        $signatureKey = hash_hmac('sha512', json_encode($data), $this->publicKey);
        $topUpAirtime = Http::withHeaders([
             "Authorization" => "Bearer " . $this->secretKey,
             "Encryption" => $signatureKey,
             "Content-Type" => "application/json",
        ])->post($this->baseUrl . '/airtime/topup',$data
        )->json();

        return $topUpAirtime;
    }
}
