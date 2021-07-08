<?php

namespace App\Http\Controllers\Governorates\Dashboard;

use App\Models\Area;
use App\Models\Governorate;
use Illuminate\Routing\Controller;
use App\Http\Requests\Governorates\AreaRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AreaController extends Controller
{
    use AuthorizesRequests;

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Governorates\AreaRequest $request
     * @param \App\Models\Governorate $governorate
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AreaRequest $request, Governorate $governorate)
    {
        $this->authorize('create', Area::class);

        $governorate->areas()->create($request->all());

        flash(trans('areas.messages.created'));

        return redirect()->route('dashboard.governorates.show', $governorate);
    }

    /**
     * Display the Area edit form.
     *
     * @param \App\Models\Governorate $governorate
     * @param \App\Models\Area $area
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return \Illuminate\Http\Response
     */
    public function edit(Governorate $governorate, Area $area)
    {
        $this->authorize('update', [$area, $governorate]);

        return view('dashboard.areas.edit', compact('governorate', 'area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Governorates\AreaRequest $request
     * @param \App\Models\Governorate $governorate
     * @param \App\Models\Area $area
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AreaRequest $request, Governorate $governorate, Area $area)
    {
        $this->authorize('update', [$area, $governorate]);

        $area->update($request->all());

        flash(trans('areas.messages.updated'));

        return redirect()->route('dashboard.governorates.show', $governorate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Governorate $governorate
     * @param \App\Models\Area $area
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Governorate $governorate, Area $area)
    {
        $this->authorize('delete', [$area, $governorate]);

        $area->delete();

        flash(trans('areas.messages.deleted'));

        return redirect()->route('dashboard.governorates.show', $governorate);
    }
}
