<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'partai' => [
            'driver' => 'session',
            'provider' => 'partai',
        ],
        // ... other guards
    ],
    
    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\AdminDamai::class, // Ensure model name is correct
        ],
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\UserPemilu::class,
        ],
        'partai' => [
            'driver' => 'eloquent',
            'model' => App\Models\Partai::class,
        ],
        // ... other providers
    ],
    
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

    'redirect_after_logout' => '/welcome', // Tambahkan ini untuk mengarahkan ke halaman selamat datang setelah logout

];


