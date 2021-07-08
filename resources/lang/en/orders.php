<?php

return [
    'Shipping Information'=>'Shipping Information',

    'singular' => 'Order',
    'plural' => 'Orders',
    'my_orders' => 'My Orders',
//    'my_orders' => 'Re-Order',
    'empty' => 'There are no orders yet.',
    'count' => 'Orders Count',
    'earnings' => 'Earnings',
    'statistics' => 'Orders Statistics',
    'search' => 'Search',
    'select' => 'Select Order',
    'perPage' => 'Results Per Page',
    'filter' => 'Search for order',
    'last_orders' => 'Last Orders',
    'details' => 'Details',
    'number' => 'Orders Number',
    'today' => 'Today',
    'orders_week_report' => 'Orders Weekly Report',
    'yesterday' => 'Yesterday',
    '2daysago' => '2 Days ago',
    '3daysago' => '3 Days ago',
    '4daysago' => '4 Days ago',
    '5daysago' => '5 Days ago',
    '6daysago' => '6 Days ago',
    '7daysago' => '7 Days ago',
    'actions' => [
        'list' => 'List All',
        'create' => 'Create a new order',
        'show' => 'Show order',
        'edit' => 'Edit order',
        'delete' => 'Delete order',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
        'pending' => 'Pending Orders',
    ],
    'messages' => [
        'created' => 'The order has been created successfully.',
        'updated' => 'The order has been updated successfully.',
        'deleted' => 'The order has been deleted successfully.',
    ],
    'attributes' => [
        'id' => 'Order number',
        'country'=>'country',
        'user_id' => 'Customer',
        'product_id' => 'Product',
        'qty' => 'Quantity',
        'gift_message' => 'Gift Message',
        'name' => 'Name',
        'phone' => 'Phone',
        'recieve_type' => 'Recieve Method',
        'pickup' => 'Pickup',
        'choose_branch' => 'Choose Branch',
        'delivery' => 'Delivery',
        'city' => 'City',
        'area' => 'Area',
        'street' => 'Street',
        'block' => 'Block',
        'avenue' => 'Avenue',
        'house' => 'House',
        'address' => 'Address',
        'paid' => 'Paid',
        'sub_total' => 'Sub Total',
        'total' => 'Total',
        'status' => 'Status',
        'payment_method' => 'Payment Method',
        'coupon_id' => 'Coupon',
        'shipping_company_id' => 'Shipping Company',
        'shipping_price' => 'Shipping Price',
        'discount' => 'Discount',
        'choices' => 'Choices',
        'date' => 'Date',
        'ordered_on' => 'Ordered at',
        'opened_at' => 'Opened At',
    ],
    'statuses' => [
        'pending' => 'Pending',
        'in-progress' => 'In Progress',
        'canceled' => 'Canceled',
        'rejected' => 'Rejected',
        'delivered' => 'Delivered',
        '' => 'statuses.',
    ],
    'payment_methods' => [
        'visa' => 'Visa',
        'cash' => 'Cash',
        '' => 'payment_methods.',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the order?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
    ],
    'invoice' => [
        'singular' => 'Invoice',
        'created' => 'Date',
        'payment_method' => 'Payment method',
        'items' => 'Order items',
        'qty' => 'Quantity',
        'price' => 'Price',
        'total' => 'Total',
        'final_total' => 'Final Total',
        'print' => 'Print',
        'download' => 'Download',
        'transaction' => 'Transaction',
        'transaction_no' => 'Transaction No.',
        'thanks' => 'thank you',
        'payment_successful' => 'Payment Successful',
        'payment_unsuccessful' => 'Payment Unsuccessful',
        'return_checkout' => 'Go to checkout',
    ],
];
