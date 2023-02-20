<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait StandardCheckout{

    public function initialiseTransaction(array $data)
    {
        return Http::withHeaders(
            [
                'Content-Type' => 'application/json',
            ]
        )->withToken($this->secretKey)->post(
            $this->baseUrl . '/transaction/initialize',
            $data
        )->json();
    }

}
