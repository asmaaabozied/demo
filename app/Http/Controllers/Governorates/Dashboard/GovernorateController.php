<?php

namespace App\Http\Controllers\Governorates\Dashboard;

use App\Models\Governorate;
use Illuminate\Routing\Controller;
use App\Http\Requests\Governorates\GovernorateRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GovernorateController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * GovernorateController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Governorate::class, 'governorate');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $governorates = Governorate::filter()->paginate();

        return view('dashboard.governorates.index', compact('governorates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.governorates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Governorates\GovernorateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GovernorateRequest $request)
    {
        $governorate = Governorate::create($request->all());

        $governorate->addAllMediaFromTokens();

        flash(trans('governorates.messages.created'));

        return redirect()->route('dashboard.governorates.show', $governorate);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Governorate $governorate
     * @return \Illuminate\Http\Response
     */
    public function show(Governorate $governorate)
    {
        $areas = $governorate->areas()->filter()->paginate();

        return view('dashboard.governorates.show', compact('governorate', 'areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Governorate $governorate
     * @return \Illuminate\Http\Response
     */
    public function edit(Governorate $governorate)
    {
        return view('dashboard.governorates.edit', compact('governorate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Governorates\GovernorateRequest $request
     * @param \App\Models\Governorate $governorate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GovernorateRequest $request, Governorate $governorate)
    {
        $governorate->update($request->all());

        $governorate->addAllMediaFromTokens();

        flash(trans('governorates.messages.updated'));

        return redirect()->route('dashboard.governorates.show', $governorate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Governorate $governorate
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Governorate $governorate)
    {
        $governorate->delete();

        flash(trans('governorates.messages.deleted'));

        return redirect()->route('dashboard.governorates.index');
    }
}
