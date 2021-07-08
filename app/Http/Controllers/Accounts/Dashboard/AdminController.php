<?php

namespace App\Http\Controllers\Accounts\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Accounts\AdminRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * AdminController constructor.
     *
     */
    public function __construct()
    {
        $this->authorizeResource(Admin::class, 'admin');
    }

    public function deleteAlladmins(Request $request){

        $id=$request->ids;

        Admin::whereIn('id',$id)->delete();

        return response()->json(['success'=>'this data deleted']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::where('id', '!=', 1)->get();

        return view('dashboard.accounts.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.accounts.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Accounts\AdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminRequest $request)
    {

        $admin = Admin::create($request->allWithHashedPassword());

        $admin->setType('admin');

        $admin->addAllMediaFromTokens();

        flash(trans('admins.messages.created'));

        return redirect()->route('dashboard.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('dashboard.accounts.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.accounts.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\AdminRequest $request
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminRequest $request, Admin $admin)
    {
        $admin->update($request->allWithHashedPassword());

        $admin->setType('admin');
        $admin->addAllMediaFromTokens();

        flash(trans('admins.messages.updated'));

        return redirect()->route('dashboard.admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin $admin
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        flash(trans('admins.messages.deleted'));

        return redirect()->route('dashboard.admins.index');
    }
}
