<?php

Breadcrumbs::for('dashboard.shipping_companies.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('shipping_companies.plural'), route('dashboard.shipping_companies.index'));
});

Breadcrumbs::for('dashboard.shipping_companies.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.shipping_companies.index');
    $breadcrumb->push(trans('shipping_companies.actions.create'), route('dashboard.shipping_companies.create'));
});

Breadcrumbs::for('dashboard.shipping_companies.show', function ($breadcrumb, $shipping_company) {
    $breadcrumb->parent('dashboard.shipping_companies.index');
    $breadcrumb->push($shipping_company->name, route('dashboard.shipping_companies.show', $shipping_company));
});

Breadcrumbs::for('dashboard.shipping_companies.edit', function ($breadcrumb, $shipping_company) {
    $breadcrumb->parent('dashboard.shipping_companies.show', $shipping_company);
    $breadcrumb->push(trans('shipping_companies.actions.edit'), route('dashboard.shipping_companies.edit', $shipping_company));
});
