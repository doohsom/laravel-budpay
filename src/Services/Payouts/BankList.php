<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait BankList{

    public function getBankList(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/bank_list', $data
        )->json();
    }

}
