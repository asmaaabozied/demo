<?php

namespace App\Http\Controllers\HomeOffers\Dashboard;

use App\Models\HomeOffer;
use Illuminate\Routing\Controller;
use App\Http\Requests\HomeOffers\HomeOfferRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeOffersController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * HomeOfferController constructor.
     */
    public function __construct()
    {
        //$this->authorizeResource(HomeOffer::class, 'home_offer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_offers = HomeOffer::filter()
            ->where('country_id', request('country_id', country()->id))
            ->paginate();

        return view('dashboard.home_offers.index', compact('home_offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.home_offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\HomeOffers\HomeOfferRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HomeOfferRequest $request)
    {
        $home_offer = HomeOffer::create($request->all());

        $home_offer->addAllMediaFromTokens();

        flash(trans('home_offers.messages.created'));

        return redirect()->route('dashboard.home-offers.show', $home_offer);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\HomeOffer $home_offer
     * @return \Illuminate\Http\Response
     */
    public function show(HomeOffer $home_offer)
    {
        return view('dashboard.home_offers.show', compact('home_offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\HomeOffer $home_offer
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeOffer $home_offer)
    {
        return view('dashboard.home_offers.edit', compact('home_offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\HomeOffers\HomeOfferRequest $request
     * @param \App\Models\HomeOffer $home_offer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HomeOfferRequest $request, HomeOffer $home_offer)
    {
        $home_offer->update($request->all());

        $home_offer->addAllMediaFromTokens();

        flash(trans('home_offers.messages.updated'));

        return redirect()->route('dashboard.home-offers.show', $home_offer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\HomeOffer $home_offer
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HomeOffer $home_offer)
    {
        $home_offer->delete();

        flash(trans('home_offers.messages.deleted'));

        return redirect()->route('dashboard.home-offers.index');
    }
}
