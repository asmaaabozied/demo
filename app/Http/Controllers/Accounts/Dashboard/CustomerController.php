<?php

namespace App\Http\Controllers\Accounts\Dashboard;

use App\Models\Address;
use App\Models\Customer;
use App\Models\User;
use App\Support\Accounts\AccountFactory;
use Illuminate\Routing\Controller;
use App\Http\Requests\Accounts\CustomerRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * CustomerController constructor.
     */
    public function __construct()
    {
//        $this->authorizeResource(Customer::class, 'customer');
        $this->serverKey = config('app.firebase_server_key');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index()
    {
        $customers = Customer::where('type', 'customer')->get();

        return view('dashboard.accounts.customers.index', compact('customers'));
    }

    public function deleteAllcustomers(Request $request)
    {
        $id = $request->ids;

        Customer::whereIn('id', $id)->delete();

        return response()->json(['success' => 'this data deleted']);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.accounts.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Accounts\CustomerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerRequest $request)
    {

        $customer = Customer::create($request->except('house', 'street', 'block', 'address', 'password', 'password_confirmation', 'city_id'));

        $customer['password'] = bcrypt($request->password);
        $customer->setType('customer');
        $customer->addAllMediaFromTokens();

        if ($request->address)
            foreach ($request->address as $key => $value)
                Address::create([

                    'address' => $request['address'][$key],
                    'city_id' => $request['city_id'][$key],
                    'block' => $request['block'][$key],
                    'street' => $request['street'][$key],
                    'house' => $request['house'][$key],
                    'user_id' => $customer->id,
                    'phone' => $customer->phone,
                    'email' => $customer->email,
                    'avenue' => $request['avenue'][$key],

                ]);
        else {

            Address::create([

                'user_id' => $customer->id,
                'phone' => $customer->phone,
                'email' => $customer->email,


            ]);
        }


        flash(trans('customers.messages.created'));

        return redirect()->route('dashboard.customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $addresses = $customer->addresses()->with('city')->paginate();


        return view('dashboard.accounts.customers.show', compact('customer', 'addresses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $addresses = $customer->addresses()->with('city')->paginate();

        return view('dashboard.accounts.customers.edit', compact('customer', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\CustomerRequest $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustomerRequest $request, $id)
    {


        $customer = Customer::find($id);
//
//        $customer =$customer->update($request->except('house', 'street', 'block', 'address', 'password', 'password_confirmation', 'city_id')+['type'=>'customer']+['password'=>bcrypt($request->password)]);
        $customer = $customer->update([
            'name' => $request->name,
            'lastname' => $request->lastname,

            'email' => $request->email,
            'phone' => $request->phone,
            'type' => 'customer',
            'password' => bcrypt($request->password)


        ]);
//        $customer->addAllMediaFromTokens();


//        $customer['password']=bcrypt($request->password);

//        $customer->setType('customer');

//        $customer->addAllMediaFromTokens();

        if ($request->address)

            $ad = Address::where('user_id', $id)->delete();

        foreach ($request->address as $key => $value)


            $addresss = Address::create([

                'address' => $request['address'][$key],
                'city_id' => $request['city_id'][$key],
                'block' => $request['block'][$key],
                'street' => $request['street'][$key],
                'house' => $request['house'][$key],
                'user_id' => $id,
                'avenue' => $request['avenue'][$key],

            ]);

//        $customer->addAllMediaFromTokens();

        flash(trans('customers.messages.updated'));

        return redirect()->route('dashboard.customers.index');
    }

    public function sendPush(Request $request)
    {

        $customers = Customer::get();
        //$customers = Customer::where('id', 146)->get();
        foreach ($customers as $customer) {
            foreach ($customer->tokens as $token) {
                //echo $token->name."<br>";
                $data = [
                    "to" => $token->name,
                    "notification" =>
                        [
                            "title" => $request->title,
                            "body" => $request->body,
                            "icon" => url('/Otoray2/img/Logo.png')
                        ],
                ];
                $dataString = json_encode($data);

                $headers = [
                    'Authorization: key=' . $this->serverKey,
                    'Content-Type: application/json',
                ];

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

                curl_exec($ch);
                /*
                $serverOutput = curl_exec($ch);
                $decodeOutput = json_decode($serverOutput, true);
                return $decodeOutput;
                */
            }
        }
        flash(trans('Notification sent!'));
        return redirect()->route('dashboard.customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customer = User::find($id);
        $customer->delete();

        flash(trans('customers.messages.deleted'));

        return redirect()->route('dashboard.customers.index');
    }
}
