<?php

return [
    'plural' => 'العضويات',
    'types' => [
        \App\Models\User::ADMIN_TYPE => 'مسئول',
        \App\Models\User::CUSTOMER_TYPE => 'عميل',
        \App\Models\User::MERCHANT_TYPE => 'تاجر',
    ],
    'impersonate' => [
        'go' => 'الذهاب للوحة التحكم',
        'leave' => 'العودة للحساب السابق',
    ],
];
