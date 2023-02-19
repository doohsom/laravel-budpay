<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageElectricity{
    
    public function getAllElectricity(array $data=[])
    {
        return "get all electricity";
    }

    public function validateElectricity(array $data)
    {
        return 'validate electricity';
    }

    public function rechargeElectricity(array $data)
    {
        return 'recharge electricity';
    }
}
