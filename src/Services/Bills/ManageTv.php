<?php

namespace Doohsom\Budpay\Services\Bills;

use Bill;
use Illuminate\Support\Facades\Http;

trait ManageTv{
    public function getAll(array $data=[])
    {
        return "get all tv";
    }

    public function getpackagesByProvider(array $data=[])
    {
        return 'packages by provider';
    }

    public function validateTv(array $data)
    {
        return 'validate';
    }

    public function payTv(array $data)
    {
        return 'pay';
    }
}
