<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait AccountNameValidation{

    public function accountNameVerify(array $data, $version = null)
    {
        $baseUrl = (strtolower($version) === "v1") ? config('budpay.baseUrlV1') : $this->baseUrl;
        return Http::withToken($this->secretKey)->post(
            $baseUrl . '/account_name_verify', $data
        )->json();
    }

}
