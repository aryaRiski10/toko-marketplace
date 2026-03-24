<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Marketplace Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your marketplace. This value is used when the
    | framework needs to place the name of the marketplace in a notification
    | or any other location as required by the application or its packages.
    |
    */
    'name' => env('MARKETPLACE_NAME', 'Toko Marketplace'),
    'commision_rate' => env('MARKETPLACE_COMMISION_RATE', 0.05),
    'max_product_images' => 10,
    'supported_payment_methods' => ['xendit', 'midtrans', 'dana', 'gopay', 'shopeepay', 'linkaja'],


];
