<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use Doohsom\Budpay\Budpay;

class AcceptPayment extends Budpay{

    use AcceptPayment;
    use FetchTransaction;
    use ServerToServer;
    use ServerToServerTransferCheckout;
    use StandardCheckout;
    use VerifyTransaction;
        
}
