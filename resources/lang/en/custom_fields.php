<?php

use App\Models\CustomField;

return [
    'singular' => 'Custom Field',
    'plural' => 'Custom Fields',
    'empty' => 'There are no custom fields yet.',
    'search' => 'Search',
    'select' => 'Select Custom Field',
    'perPage' => 'Custom Fields Per Page',
    'filter' => 'Search for custom field',
    'actions' => [
        'list' => 'List all',
        'create' => 'Create Custom Field',
        'show' => 'Show Custom Field',
        'edit' => 'Edit Custom Field',
        'delete' => 'Delete Custom Field',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The custom field has been created successfully.',
        'updated' => 'The custom field has been updated successfully.',
        'deleted' => 'The custom field has been deleted successfully.',
    ],
    'attributes' => [
        'name' => 'Field Name',
        '%name%' => 'Field Name',
        'product_type_id' => 'Product Type',
        'options_type' => 'Switch Type',
        'code' => 'Code',
    ],
    'notes' => [
        'code' => 'Display in url in search & filter.',
    ],
    'options_types' => [
        CustomField::DROPDOWN_OPTION_TYPE => 'Dropdown',
        CustomField::COLOR_OPTION_TYPE => 'Color',
        CustomField::BUTTON_OPTION_TYPE => 'Button',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the custom field ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
    ],
];
