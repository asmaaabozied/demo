<?php

namespace App\Http\Controllers\Pages\Dashboard;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Pages\PageRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Page::class, 'page');
    }

    public function deleteAllpages(Request $request){

        $id=$request->ids;

        Page::whereIn('id',$id)->delete();

        return response()->json(['success'=>'this data deleted']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Pages\PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageRequest $request)
    {
        $page = Page::create($request->all());
        $page->addAllMediaFromTokens();


        flash(trans('pages.messages.created'));

        return redirect()->route('dashboard.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('dashboard.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {

        return view('dashboard.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Pages\PageRequest $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());
        $page->addAllMediaFromTokens();


        flash(trans('pages.messages.updated'));

        return redirect()->route('dashboard.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Page $page)
    {
        $page->delete();

        flash(trans('pages.messages.deleted'));

        return redirect()->route('dashboard.pages.index');
    }
}
