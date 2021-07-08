<?php

Breadcrumbs::for('dashboard.attributeproducts.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('products_attribute.plural'), route('dashboard.attributeproducts.index'));
});

Breadcrumbs::for('dashboard.attributeproducts.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.attributeproducts.index');
    $breadcrumb->push(trans('products_attribute.actions.create'), route('dashboard.attributeproducts.create'));
});

Breadcrumbs::for('dashboard.attributeproducts.show', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.attributeproducts.index');
    $breadcrumb->push(Str::limit($product->name, 20), route('dashboard.attributeproducts.show', $product));
});

Breadcrumbs::for('dashboard.attributeproducts.edit', function ($breadcrumb, $product) {
    $breadcrumb->parent('dashboard.attributeproducts.show', $product);
    $breadcrumb->push(trans('products_attribute.actions.edit'), route('dashboard.attributeproducts.edit', $product));
});

