<?php

use App\Models\CustomField;

return [
    'singular' => 'الخاصية',
    'plural' => 'الخصائص',
    'empty' => 'لا يوجد خصائص.',
    'search' => 'بحث',
    'select' => 'اختر الخاصية',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن خاصية',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة خاصية',
        'show' => 'عرض الخاصية',
        'edit' => 'تعديل الخاصية',
        'delete' => 'حذف الخاصية',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
    ],
    'messages' => [
        'created' => 'تم اضافة الخاصية بنجاح.',
        'updated' => 'تم تعديل الخاصية بنجاح.',
        'deleted' => 'تم حذف الخاصية بنجاح.',
    ],
    'attributes' => [
        'name' => 'اسم الخاصية',
        '%name%' => 'اسم الخاصية',
        'product_type_id' => 'نوع المنتج',
        'options_type' => 'نوع الاختيار',
        'code' => 'كود الخاصية',
    ],
    'notes' => [
        'code' => 'يظهر في الرابط في البحث والتصفية.',
    ],
    'options_types' => [
        CustomField::DROPDOWN_OPTION_TYPE => 'قائمة منسدلة',
        CustomField::COLOR_OPTION_TYPE => 'لون',
        CustomField::BUTTON_OPTION_TYPE => 'زر',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف الخاصية ؟',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
    ],
];
