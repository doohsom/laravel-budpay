<?php

namespace Doohsom\Budpay\Services\Identities;

use Identity;
use Illuminate\Support\Facades\Http;

trait BvnVerification{
    
    public function bvnVerify(array $data, $version = null)
    {
        return Http::withToken($this->secretKey)->post(
            $this->baseUrl . '/bvn/verify', $data
        )->json();
    }
}   
