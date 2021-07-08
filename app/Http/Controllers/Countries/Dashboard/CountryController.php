<?php

namespace App\Http\Controllers\Countries\Dashboard;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Countries\CountryRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CountryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * CountryController constructor.
     */
    public function __construct()
    {
//        $this->authorizeResource(Country::class, 'country');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->status == 1) {
            $countries = Country::where('status', 1)->latest()->get();


        } elseif ($request->status == 2) {
            $countries = Country::where('status', 0)->latest()->get();


        } elseif ($request->status == 3) {
            $countries = Country::where('is_default', 1)->latest()->get();


        } else {
            $countries = Country::latest()->paginate(25);


        }
        $actives = Country::where('status', 1)->latest()->get();
        $noactives = Country::where('status', 0)->latest()->get();

        return view('dashboard.countries.index', compact('countries', 'actives', 'noactives'));
    }

    public function deleteAllcountries(Request $request)
    {

        $ids = $request->ids;
        Country::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'this data deleted']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.countries.create');
    }

    public function status($id)
    {

        $country = Country::find($id);

        $status = ($country->status == 1) ? 0 : 1;


        $country->status = $status;

        $country->save();

        return back();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Countries\CountryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CountryRequest $request)
    {

        $country = Country::create($request->except('name2:ar', 'name2:en', 'shipping_price'));


//        $country->addAllMediaFromTokens();

        if ($request->shipping_price) {


            foreach ($request->shipping_price as $key => $value)


                $attribute = City::create([

                    'country_id' => $country->id,

                    'shipping_price' => $request['shipping_price'][$key],
                    'name2:ar' => isset($request['name2:ar'][$key]) ? $request['name2:ar'][$key] : '',
                    'name2:en' => isset($request['name2:en'][$key]) ? $request['name2:en'][$key] : '',


                ]);
        }


        flash(trans('countries.messages.created'));

        return redirect()->route('dashboard.countries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $cities = $country->cities()->paginate();

        return view('dashboard.countries.show', compact('country', 'cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $cities = $country->cities;

        return view('dashboard.countries.edit', compact('country', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Countries\CountryRequest $request
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CountryRequest $request, $id)
    {
        $country = Country::find($id);


        $country->update($request->except('name2:ar', 'name2:en', 'shipping_price'));

//        $country->addAllMediaFromTokens();
        if ($request->shipping_price) {

            foreach ($request->shipping_price as $key => $value)


                $attribute = City::updateOrCreate(['country_id' => $id], [
                    'country_id' => $id,
                    'shipping_price' => $request['shipping_price'][$key],
                    'name2:ar' => isset($request['name2:ar'][$key]) ? $request['name2:ar'][$key] : '',
                    'name2:en' => isset($request['name2:en'][$key]) ? $request['name2:en'][$key] : '',


                ]);



        }

        flash(trans('countries.messages.updated'));

        return redirect()->route('dashboard.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Country $country)
    {
        $country->delete();

        flash(trans('countries.messages.deleted'));

        return redirect()->route('dashboard.countries.index');
    }
}
