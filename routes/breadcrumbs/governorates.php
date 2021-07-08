<?php

Breadcrumbs::for('dashboard.governorates.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('governorates.plural'), route('dashboard.governorates.index'));
});

Breadcrumbs::for('dashboard.governorates.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.governorates.index');
    $breadcrumb->push(trans('governorates.actions.create'), route('dashboard.governorates.create'));
});

Breadcrumbs::for('dashboard.governorates.show', function ($breadcrumb, $governorate) {
    $breadcrumb->parent('dashboard.governorates.index');
    $breadcrumb->push($governorate->name, route('dashboard.governorates.show', $governorate));
});

Breadcrumbs::for('dashboard.governorates.edit', function ($breadcrumb, $governorate) {
    $breadcrumb->parent('dashboard.governorates.show', $governorate);
    $breadcrumb->push(trans('governorates.actions.edit'), route('dashboard.governorates.edit', $governorate));
});
