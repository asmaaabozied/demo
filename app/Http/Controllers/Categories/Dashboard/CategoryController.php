<?php

namespace App\Http\Controllers\Categories\Dashboard;

use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Http\Requests\Categories\CategoryRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ProducttypeController constructor.
     */
    public function __construct()
    {
//        $this->authorizeResource(Category::class, 'category');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $categories = Category::filter()
//            ->parentsOnly()
//            ->where('country_id', request('country_id', country()->id))
//            ->paginate();


        $actives = Category::where('status', 1)->get();

        $noactives = Category::where('status', 0)->get();

        if ($request->status == 1) {


            $cats = Category::parentsOnly()->whereStatus(1)->latest()->paginate(30);


        } elseif ($request->status == 2) {

            $cats = Category::parentsOnly()->whereStatus(0)->latest()->paginate(30);


        } else {

            $cats = Category::latest()->get();

        }



        return view('dashboard.categories.index', compact('cats', 'actives', 'noactives'));
    }

    public function deleteAllcatogerries(Request $request){


        $id=$request->ids;

        Category::whereIn('id',$id)->delete();

        return response()->json(['success'=>'this data deleted']);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Categories\CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());

        $category->addAllMediaFromTokens();

        flash(trans('categories.messages.created'));

        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $offers = $category->offers()->paginate();

        return view('dashboard.categories.show', compact('category', 'offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Categories\CategoryRequest $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        $category->addAllMediaFromTokens();

        flash(trans('categories.messages.updated'));

        return redirect()->route('dashboard.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {


        $category = Category::find($id);

        $category->delete();

        flash(trans('categories.messages.deleted'));

        return back();
    }


    public function status($id)
    {

        $product = Category::find($id);
        $status = ($product->status == 1) ? 0 : 1;

        $product->status = $status;

        $product->save();

        return back();


    }
}
