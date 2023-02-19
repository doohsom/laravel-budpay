<?php

namespace Doohsom\Budpay\Services\Bills;

use Doohsom\Budpay\Budpay;

class Bill extends Budpay{
    
    use ManageInternet;
    use ManageAirtime;
    use ManageTv;
    use ManageElectricity;

        
}
