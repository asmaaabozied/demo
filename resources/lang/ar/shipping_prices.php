<?php

return [
    'singular' => '{{ucSingular}}',
    'plural' => '{{ucPlural}}',
    'price' => 'سعر الشحن',
    'empty' => 'لا يوجد اسعار شحن حتى الان',
    'count' => 'عدد اسعار الشحن',
    'search' => 'بحث',
    'select' => 'اختر سعر الشحن',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن سعر شحن',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة سعر شحن',
        'show' => 'عرض سعر الشحن',
        'edit' => 'تعديل سعر الشحن',
        'delete' => 'حذف سعر الشحن',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة سعر الشحن بنجاح.',
        'updated' => 'تم تعديل سعر الشحن بنجاح.',
        'deleted' => 'تم حذف سعر الشحن بنجاح.',
    ],
    'attributes' => [
        'country_id' => 'الدولة',
        'first_price' => 'سعر اول منتج',
        'second_price' => 'سعر المنتجات الاخرى',
        'name' => 'attributes.name',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف سعر الشحن',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
    ],
];
