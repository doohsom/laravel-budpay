<?php

namespace Doohsom\Budpay\Services\Payouts;

use Doohsom\Budpay\Budpay;

class Payout extends Budpay{
    
    use AccountNameValidation;
    use BankList;
    use BulkPayout;
    use PayoutFees;
    use SinglePayout;
    use VerifyPayout;
    use WalletBalance;
    use WalletTransaction;     
}
