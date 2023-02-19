<?php

namespace Doohsom\Budpay\Services\PaymentFeatures;

use PaymentFeaure;
use Illuminate\Support\Facades\Http;

trait RequestPayment{

    public function createPaymentLink(array $data)
    {
        return 'create payment link';
    }
}
