<?php

return [
    'plural' => 'Accounts',
    'types' => [
        \App\Models\User::ADMIN_TYPE => 'Admin',
        \App\Models\User::CUSTOMER_TYPE => 'Customer',
        \App\Models\User::MERCHANT_TYPE => 'Merchant',
    ],
    'impersonate' => [
        'go' => 'Go To Dashboard',
        'leave' => 'Back To Previous Account',
    ],
];
