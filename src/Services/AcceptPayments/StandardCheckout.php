<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait StandardCheckout{

    public function initialiseTransaction(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/transaction/initialize', $data
        )->json();
    }

}
