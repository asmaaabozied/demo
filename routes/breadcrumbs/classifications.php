<?php

Breadcrumbs::for('dashboard.classifications.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('classifications.plural'), route('dashboard.classifications.index'));
});

Breadcrumbs::for('dashboard.classifications.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.classifications.index');
    $breadcrumb->push(trans('classifications.actions.create'), route('dashboard.classifications.create'));
});

Breadcrumbs::for('dashboard.classifications.show', function ($breadcrumb, $classification) {
    if ($classification->parent) {
        $breadcrumb->parent('dashboard.classifications.show', $classification->parent);
    } else {
        $breadcrumb->parent('dashboard.classifications.index');
    }
    $breadcrumb->push($classification->name, route('dashboard.classifications.show', $classification));
});

Breadcrumbs::for('dashboard.classifications.edit', function ($breadcrumb, $classification) {
    $breadcrumb->parent('dashboard.classifications.show', $classification);
    $breadcrumb->push(trans('classifications.actions.edit'), route('dashboard.classifications.edit', $classification));
});
