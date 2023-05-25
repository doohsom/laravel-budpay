<?php

/*
 * You can place your custom package configuration in here.
 */
return [

     /**
     * Public Key From Budpay Dashboard
     */

     'publicKey' => env('BUDPAY_PUBLIC_KEY'),

     /**
      * Secret Key From Budpay Dashboard
      */
 
     'secretKey' => env('BUDPAY_SECRET_KEY'),
 
     /**
      * Budpay Payment URL
      */
 
     'baseUrl' => env('BUDPAY_BASE_URL'),
 
     'baseUrlV1' => env('BUDPAY_BASE_URL_V1'),
 
     /**
      * Budpay IP
      */
 
     'budpayIp' => env('BUDPAY_IP'),
 
 
];
