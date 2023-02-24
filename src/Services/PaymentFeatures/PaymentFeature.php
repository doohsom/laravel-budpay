<?php

namespace Doohsom\Budpay\Services\PaymentFeatures;

use Doohsom\Budpay\Budpay;

class PaymentFeature extends Budpay{
       
    use RequestPayment;
    use createPaymentLink;
    use Customer;
    use VirtualAccount;
    use Settlements;
    use Refunds;
}
