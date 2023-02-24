<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait ServerToServer{

    public function testEncryption(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/test/encryption', $data
        )->json();
    }


    public function initialiseS2STransaction(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/s2s/transaction/initialize', $data
        )->json();
    }
}
