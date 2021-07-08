<?php

Breadcrumbs::for('dashboard.governorates.areas.edit', function ($breadcrumb, $governorate, $city) {
    $breadcrumb->parent('dashboard.governorates.show', $governorate);
    $breadcrumb->push(
        trans('areas.actions.edit'),
        route('dashboard.governorates.areas.edit', [$governorate, $city])
    );
});
