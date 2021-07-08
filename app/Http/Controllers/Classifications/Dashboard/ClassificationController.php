<?php

namespace App\Http\Controllers\Classifications\Dashboard;

use App\Models\Classification;
use Illuminate\Routing\Controller;
use App\Http\Requests\Classifications\ClassificationRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClassificationController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ClassificationController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Classification::class, 'classification');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::filter()
            ->parentsOnly()
            ->where('country_id', request('country_id', country()->id))
            ->paginate();

        return view('dashboard.classifications.index', compact('classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.classifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Classifications\ClassificationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClassificationRequest $request)
    {
        $classification = Classification::create($request->all());

        $classification->addAllMediaFromTokens();

        flash(trans('classifications.messages.created'));

        return redirect()->route('dashboard.classifications.show', $classification->parent ?: $classification);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Classification $classification
     * @return \Illuminate\Http\Response
     */
    public function show(Classification $classification)
    {
        $offers = $classification->offers()->paginate();

        return view('dashboard.classifications.show', compact('classification', 'offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Classification $classification
     * @return \Illuminate\Http\Response
     */
    public function edit(Classification $classification)
    {
        return view('dashboard.classifications.edit', compact('classification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\classifications\ClassificationRequest $request
     * @param \App\Models\Classification $classification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClassificationRequest $request, Classification $classification)
    {
        $classification->update($request->all());

        $classification->addAllMediaFromTokens();

        flash(trans('classifications.messages.updated'));

        return redirect()->route('dashboard.classifications.show', $classification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Classification $classification
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Classification $classification)
    {
        $classification->delete();

        flash(trans('classifications.messages.deleted'));

        return redirect()->route('dashboard.classifications.index');
    }
}
