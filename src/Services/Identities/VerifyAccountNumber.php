<?php

namespace Doohsom\Budpay\Services\Identities;

use Identity;
use Illuminate\Support\Facades\Http;

trait VerifyAccountNumber{

    public function verifyAccountName(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/account_name_verify', $data
        )->json();
    }

}
