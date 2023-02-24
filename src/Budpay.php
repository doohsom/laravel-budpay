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

    public function bill(): Bill
    {
        return new Bill();
    }

    public function identity(): Identity
    {
        return new Identity();
    }

    public function payout(): Payout
    {
        return new Payout();
    }

    public function paymentFeatures(): PaymentFeature
    {
        return new PaymentFeature();
    }

    public function acceptPayment(): AcceptPayment
    {
        return new AcceptPayment();
    }
}
