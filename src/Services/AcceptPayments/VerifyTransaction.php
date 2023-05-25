<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait VerifyTransaction{

    public function verifyTransactionWithReference(string $reference, $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction/verify/' . $reference
        )->json();
    }
}
