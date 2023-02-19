<?php

namespace Doohsom\Budpay\Services\Payouts;

use Payout;
use Illuminate\Support\Facades\Http;

trait AccountNameValidation{

    public function accountNameVerify(array $data)
    {
        return 'account name verify';
    }

}
