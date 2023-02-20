<?php

namespace Doohsom\Budpay\Services\AcceptPayments;

use AcceptPayment;
use Illuminate\Support\Facades\Http;

trait FetchTransaction{

    public function findTransaction(int $transaction_id): string
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction/' . $transaction_id
        )->json();
    }


    /**
     * Search Value can be reference / session id / account number/ card pan
     * @param string $search_value
     * @return string
     */

    public function queryTransaction(string $search_value): string
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction_query/' . $search_value
        )->json();
    }

    public function getAllTransaction(array $data=[])
    {
        return Http::withToken($this->secretKey)->get(
            $this->baseUrl . '/transaction/',
        )->json();
    }
}
