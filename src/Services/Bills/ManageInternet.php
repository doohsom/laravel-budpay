<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageInternet{
    public function getAllInternet(array $data=[])
    {
        return "get all internet";
    }

    public function getPlansByProvider(array $data=[])
    {
        return 'plans by provider';
    }

    public function data(array $data)
    {
        return 'data';
    }
}
