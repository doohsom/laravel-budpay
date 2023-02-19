<?php

namespace Doohsom\Budpay;

use Doohsom\Budpay\Services\Bills\Bill;
use Doohsom\Budpay\Services\Payouts\Payout;
use Doohsom\Budpay\Services\Identities\Identity;
use Doohsom\Budpay\Services\AcceptPayments\AcceptPayment;
use Doohsom\Budpay\Services\PaymentFeatures\PaymentFeature;



class Budpay
{

    protected $publicKey;
    protected $secretKey;
    protected $baseUrl;


    public function __construct()
    {
        $this->publicKey = config('budpay.publicKey');
        $this->secretKey = config('budpay.secretKey');
        $this->baseUrl = config('budpay.baseUrl');
    }

    public function bill()
    {
        $bills = new Bill();
        return $bills;
    }

    public function identity()
    {
        $identities = new Identity();
        return $identities;
    }

    public function payout()
    {
        $payout = new Payout();
        return $payout;
    }

    public function paymentFeatures()
    {
        $paymentFeatures = new PaymentFeature();
        return $paymentFeatures;
    }

    public function acceptPayment()
    {
        $acceptPayment = new AcceptPayment();
        return $acceptPayment;
    }
}
