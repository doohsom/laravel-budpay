<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait VerifyPayout{

    public function verifyPayout(array $data=[])
    {
        return 'verify payout';
    }

    public function getPayoutTransfers(array $data=[])
    {
        return 'payout transfers';
    }

}
