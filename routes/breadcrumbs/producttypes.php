<?php

Breadcrumbs::for('dashboard.producttypes.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('product_types.plural'), route('dashboard.producttypes.index'));
});

Breadcrumbs::for('dashboard.producttypes.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.producttypes.index');
    $breadcrumb->push(trans('product_types.actions.create'), route('dashboard.producttypes.create'));
});

Breadcrumbs::for('dashboard.producttypes.show', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.producttypes.index');
    $breadcrumb->push(Str::limit($product->name, 20), route('dashboard.producttypes.show', $product));
});

Breadcrumbs::for('dashboard.producttypes.edit', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.producttypes.show', $product);
    $breadcrumb->push(trans('product_types.actions.edit'), route('dashboard.producttypes.edit', $product));
});
