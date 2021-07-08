<?php

return [
    'Shipping Information'=>'معلومات الشحن',
    'singular' => 'الطلب',
    'plural' => 'الطلبات',
    'my_orders' => 'طلباتي',
    're_order' => 'إعادة الطلب',
    'empty' => 'لا يوجد طلبات حتى الان',
    'count' => 'عدد الطلبات',
    'earnings' => 'الارباح',
    'statistics' => 'احصائيات الطلبات',
    'search' => 'بحث',
    'select' => 'اختر الطلب',
    'perPage' => 'عدد النتائج بالصفحة',
    'filter' => 'ابحث عن طلب',
    'last_orders' => 'الطلبات السابقة',
    'details' => 'التفاصيل',
    'number' => 'عدد الطلبات',
    'orders_week_report' => 'تقرير الطلبات الاسبوعي',
    'today' => 'اليوم',
    'yesterday' => 'أمس',
    '2daysago' => 'منذ يومين',
    '3daysago' => 'منذ 3 أيام',
    '4daysago' => 'منذ 4 أيام',
    '5daysago' => 'منذ 5 أيام',
    '6daysago' => 'منذ 6 أيام',
    '7daysago' => 'منذ 7 أيام',
    'actions' => [
        'list' => 'عرض الكل',
        'create' => 'اضافة طلب',
        'show' => 'عرض الطلب',
        'edit' => 'تعديل الطلب',
        'delete' => 'حذف الطلب',
        'options' => 'خيارات',
        'save' => 'حفظ',
        'filter' => 'بحث',
        'pending' => 'الطلبات قيد المراجعة',
    ],
    'messages' => [
        'created' => 'تم اضافة الطلب بنجاح.',
        'updated' => 'تم تعديل الطلب بنجاح.',
        'deleted' => 'تم حذف الطلب بنجاح.',
    ],
    'attributes' => [
        'id' => 'رقم الطلب',
        'country'=>'المنطقة',

        'user_id' => 'العميل',
        'product_id' => 'المنتج',
        'qty' => 'الكمية',
        'gift_message' => 'رسالة الهدية',
        'city' => 'المحافظه',
        'name' => 'الاسم',
        'phone' => 'رقم الهاتف',
        'recieve_type' => 'طريقة الاستلام',
        'pickup' => 'استلام من فرع',
        'choose_branch' => 'اختر الفرع',
        'delivery' => 'توصيل إلى المنزل',
        'name' => 'الاسم',
        'area' => 'المنطقة',
        'street' => 'الشارع',
        'block' => 'القطعه',
        'avenue' => 'جاده(اختياري)',
        'house' => 'رقم المنزل/الشقه',
        'address' => 'العنوان',
        'paid' => 'المبلغ المدفوع',
        'sub_total' => 'الإجمال الفرعي',
        'total' => 'الاجمالي النهائي',
        'status' => 'حالة الطلب',
        'payment_method' => 'طريقة الدفع',
        'payment_id' => 'رقم العملية',
        'coupon_id' => 'الكوبون',
        'shipping_company_id' => 'شركة الشحن',
        'shipping_price' => 'مصاريف الشحن',
        'discount' => 'الخصم',
        'date' => 'التاريخ',
        'choices' => 'الاختيارات',
        'ordered_on' => 'تم طلبه في',
        'opened_at' => 'تم فتحه في',
    ],
    'statuses' => [
        'pending' => 'قيد المراجعة',
        'in-progress' => 'قيد التنفيذ',
        'canceled' => 'تم الالغاء',
        'rejected' => 'تم الرفض',
        'delivered' => 'تم الاستلام',
        '' => 'statuses.',
    ],
    'payment_methods' => [
        'visa' => 'فيزا',
        'cash' => 'كاش',
        '' => 'payment_methods.',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'تحذير !',
            'info' => 'هل انت متأكد انك تريد حذف الطلب',
            'confirm' => 'حذف',
            'cancel' => 'الغاء',
        ],
    ],
    'invoice' => [
        'singular' => 'فاتورة',
        'created' => 'التاريخ',
        'payment_method' => 'طريقة الدفع',
        'items' => 'عناصر الطلب',
        'qty' => 'الكمية',
        'price' => 'السعر',
        'total' => 'الإجمالي',
        'final_total' => 'الإجمالي النهائي',
        'print' => 'طباعة',
        'download' => 'تحميل',
        'transaction' => 'العمليات',
        'transaction_no' => 'رقم العملية',
        'thanks' => 'شكرا لك',
        'payment_successful' => 'تم الدفع بنجاح',
        'payment_unsuccessful' => 'فشل عملية الدفع',
        'return_checkout' => 'الذهاب لصفحة الدفع',
    ],
];