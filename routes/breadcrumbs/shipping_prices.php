<?php

Breadcrumbs::for('dashboard.shipping_prices.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('shipping_prices.plural'), route('dashboard.shipping_prices.index'));
});

Breadcrumbs::for('dashboard.shipping_prices.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.shipping_prices.index');
    $breadcrumb->push(trans('shipping_prices.actions.create'), route('dashboard.shipping_prices.create'));
});

Breadcrumbs::for('dashboard.shipping_prices.show', function ($breadcrumb, $shipping_price) {
    $breadcrumb->parent('dashboard.shipping_prices.index');
    $breadcrumb->push($shipping_price->name, route('dashboard.shipping_prices.show', $shipping_price));
});

Breadcrumbs::for('dashboard.shipping_prices.edit', function ($breadcrumb, $shipping_price) {
    $breadcrumb->parent('dashboard.shipping_prices.show', $shipping_price);
    $breadcrumb->push(trans('shipping_prices.actions.edit'), route('dashboard.shipping_prices.edit', $shipping_price));
});
