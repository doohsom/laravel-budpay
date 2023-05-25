Run
```
composer require doohsom/laravel-budpay
```

Register the service provider. Open config/app.php and add the below to the providers key

```
Doohsom\Budpay\BudpayServiceProvider::class,
```

Run
```
php artisan vendor:publish --provider="Doohsom\Budpay\BudpayServiceProvider"
```

Open up your .env file add the following key
```
BUDPAY_SECRET_KEY="sk_test_xxxxxxxxxxxxxxxxxxxxx"
BUDPAY_PUBLIC_KEY="pk_test_xxxxxxxxxxxxxxxxxxxxx"
BUDPAY_BASE_URL="demosite"
BUDPAY_BASE_URL_V1="demosite1"
```
