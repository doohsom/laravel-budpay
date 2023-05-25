<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait FetchTransaction{

    public function findTransaction(int $transaction_id, $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction/' . $transaction_id
        )->json();
    }

    public function queryTransaction(string $search_value, $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction_query/' . $search_value
        )->json();
    }

    public function getAllTransaction(array $data=[], $version = null)
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction/',
        )->json();
    }
}
