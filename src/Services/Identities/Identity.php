<?php

namespace Doohsom\Budpay\Services\Identities;

use Doohsom\Budpay\Budpay;

class Identity extends Budpay{

    use BvnVerification; 
    use VerifyAccountNumber;        
}
