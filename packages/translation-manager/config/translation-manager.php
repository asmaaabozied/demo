<?php

return [
    'defaultLang' => 'en',

    /**
     * The lang files paths.
     */

    'lang' => [
        'auth' => resource_path('lang/{lang}/auth.php'),
        'pagination' => resource_path('lang/{lang}/pagination.php'),
        'passwords' => resource_path('lang/{lang}/passwords.php'),
        'validation' => resource_path('lang/{lang}/validation.php'),
        'addresses' => resource_path('lang/{lang}/addresses.php'),
        'admins' => resource_path('lang/{lang}/admins.php'),
        'brands' => resource_path('lang/{lang}/brands.php'),
        'categories' => resource_path('lang/{lang}/categories.php'),
        'cities' => resource_path('lang/{lang}/cities.php'),
        'collections' => resource_path('lang/{lang}/collections.php'),
        'countries' => resource_path('lang/{lang}/countries.php'),
        'coupons' => resource_path('lang/{lang}/coupons.php'),
        'currencies' => resource_path('lang/{lang}/currencies.php'),
        'customers' => resource_path('lang/{lang}/customers.php'),
        'dashboard' => resource_path('lang/{lang}/dashboard.php'),
        'offers' => resource_path('lang/{lang}/offers.php'),
        'pages' => resource_path('lang/{lang}/pages.php'),
        'products' => resource_path('lang/{lang}/products.php'),
        'select2' => resource_path('lang/{lang}/select2.php'),
        'settings' => resource_path('lang/{lang}/settings.php'),
        'shipping_companies' => resource_path('lang/{lang}/shipping_companies.php'),
        'shipping_prices' => resource_path('lang/{lang}/shipping_prices.php'),
        'sizes' => resource_path('lang/{lang}/sizes.php'),
        'testers' => resource_path('lang/{lang}/testers.php'),
        'users' => resource_path('lang/{lang}/users.php'),
        'orders' => resource_path('lang/{lang}/orders.php'),
    ],

    /**
     * The paths that will scanned for translations.
     */

    'matches' => [
        app_path(),
        resource_path('views'),
    ],
];