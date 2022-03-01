<?php

return [

    /**
     * The SMS service to use.
     */
    'driver' => env('SMS_DRIVER', 'netgsm'),

    /**
     * Netgsm driver settings
     */
    'netgsm' => [
        'transport' => \Fowitech\Sms\Drivers\Netgsm::class,
        'sender' => env('NETGSM_SENDER', ''),
        'username' => env('NETGSM_USERNAME', ''),
        'password' => env('NETGSM_PASSWORD', ''),
        'options' => [
            //
        ]
    ],

    /**
     * Verimor driver settings
     */
    'verimor' => [
        'transport' => \Fowitech\Sms\Drivers\Verimor::class,
        'sender' => env('VERIMOR_SENDER', ''),
        'username' => env('VERIMOR_USERNAME', ''),
        'password' => env('VERIMOR_PASSWORD', ''),
        'options' => [
            'datacoding' => 0, // 0, 1 or 2
            'is_commercial' => false,
            'iys_recipient_type' => 'BIREYSEL', // TACIR
        ]
    ],

    /**
     * Mutlucell driver settings
     */
    'mutlucell' => [
        'transport' => \Fowitech\Sms\Drivers\Mutlucell::class,
        'sender' => env('MUTLUCELL_SENDER', ''),
        'username' => env('MUTLUCELL_USERNAME', ''),
        'password' => env('MUTLUCELL_PASSWORD', ''),
        'options' => [
            //
        ]
    ],

    /**
     * Iletimerkezi driver settings
     */
    'iletimerkezi' => [
        'transport' => \Fowitech\Sms\Drivers\Iletimerkezi::class,
        'sender' => env('ILETIMERKEZI_SENDER', ''),
        'key' => env('ILETIMERKEZI_KEY', ''),
        'hash' => env('ILETIMERKEZI_HASH', ''),
        'options' => [
            'iys' => '1',
            'iysList' => 'BIREYSEL',
        ]
    ],

    /**
     * Vatansms driver settings
     */
    'vatansms' => [
        'transport' => \Fowitech\Sms\Drivers\Vatansms::class,
        'sender' => env('VATANSMS_SENDER', ''),
        'userno' => env('VATANSMS_USERNO', ''),
        'username' => env('VATANSMS_USERNAME', ''),
        'password' => env('VATANSMS_PASSWORD', ''),
        'options' => [
            'tur' => 'Normal' // Normal, Turkce
        ]
    ]
];
