<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait ServerToServerTransferCheckout{

    public function initialiseBankTransfer(array $data)
    {
        return Http::withHeaders(
            [
                'Content-Type' => 'application/json',
            ]
        )->withToken($this->secretKey)->post(
            $this->baseUrl . '/s2s/banktransfer/initialize',
            $data
        )->json();
    }
}
