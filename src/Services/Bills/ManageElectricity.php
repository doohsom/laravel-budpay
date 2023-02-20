<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageElectricity{

    public function getAllElectricity(array $data=[]): string
    {
        return "get all electricity";
    }

    public function validateElectricity(array $data): string
    {
        return 'validate electricity';
    }

    public function rechargeElectricity(array $data): string
    {
        return 'recharge electricity';
    }
}
