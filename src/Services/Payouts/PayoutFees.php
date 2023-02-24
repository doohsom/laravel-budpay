<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait PayoutFees{

    public function payoutFee(array $data)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/payout_fee', $data
        )->json();
    }

}
