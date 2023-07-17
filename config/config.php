<?php

return [

    /**
     * The SMS service to use.
     */
    'driver' => env('SMS_DRIVER', 'netgsm'),

    /**
     * Twilio driver settings
     */
    'twilio' => [
        'transport' => \Turandemir\SmsServices\Drivers\Twilio::class,
        'account_sid' => env('TWILIO_ACCOUNT_SID', ''),
        'auth_token' => env('TWILIO_AUTH_TOKEN', ''),
        'phone' => env('TWILIO_PHONE', ''),
        'options' => [
            //
        ]
    ],

    /**
     * Netgsm driver settings
     */
    'netgsm' => [
        'transport' =>  \Turandemir\SmsServices\Drivers\Netgsm::class,
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
        'transport' =>  \Turandemir\SmsServices\Drivers\Verimor::class,
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
        'transport' =>  \Turandemir\SmsServices\Drivers\Mutlucell::class,
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
        'transport' =>  \Turandemir\SmsServices\Drivers\Iletimerkezi::class,
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
        'transport' =>  \Turandemir\SmsServices\Drivers\Vatansms::class,
        'sender' => env('VATANSMS_SENDER', ''),
        'userno' => env('VATANSMS_USERNO', ''),
        'username' => env('VATANSMS_USERNAME', ''),
        'password' => env('VATANSMS_PASSWORD', ''),
        'options' => [
            'tur' => 'Normal' // Normal, Turkce
        ]
    ],

    /**
     * Toplusms driver settings
     */
    'toplusms' => [
        'transport' =>  \Turandemir\SmsServices\Drivers\Toplusms::class,
        'sender' => env('TOPLUSMS_SENDER', ''),
        'api_id' => env('TOPLUSMS_API_ID', ''),
        'api_key' => env('TOPLUSMS_API_KEY', ''),
        'options' => [
            //
        ]
    ],
     /**
     * Asist Telekom SMS driver settings
     */
    'toplusms' => [
        'transport' =>  \Turandemir\SmsServices\Drivers\Asistsms::class,
        'sender' => env('TOPLUSMS_SENDER', ''),
        'api_id' => env('TOPLUSMS_API_ID', ''),
        'api_key' => env('TOPLUSMS_API_KEY', ''),
        'options' => [
            //
        ]
    ]
];
