<?php

namespace App\Http\Controllers\Products\Dashboard;

//use App\Console\Commands\Generators\Request;
use App\Http\Requests\Products\ProductSearchRequest;
use App\Models\Attribueproduct;
use App\Models\Product;
use App\Models\CustomField;
use App\DataTables\ProductsDataTable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\Products\ProductRequest;
use App\Http\Requests\Categories\CategoryRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ProducttypeController constructor.
     */
    public function __construct()
    {
//        $this->authorizeResource(Product ::class, 'product');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Product::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'this data deleted']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        if(request('in_stock')) {
//            $in_stock = request('in_stock');
//        } else {
//            $in_stock = true;
//        }
//        $products = Product::where('in_stock', $in_stock)->filter()
//            ->whereHas('category', function (Builder $builder) {
//                $builder->where('country_id', request('country_id', country()->id));
//            })
//            ->paginate();
//        return $products->render('dashboard.products.index', [
////           'products' => Product::all(),
//            'title'=>trans('site.booking')
//        ]);


        if ($request->status == 1) {


            $products = Product::whereStatus(1)->latest()->paginate(30);


        } elseif ($request->status == 2) {
            $products = Product::whereStatus(0)->latest()->paginate(30);


        } elseif ($request->status == 3) {

            $products = Product::whereNotNull('in_stock')->latest()->paginate(30);


        } else {


            $products = Product::latest()->paginate(30);
        }
        return view('dashboard.products.index', compact('products'));

    }

    public function searchproduct(ProductSearchRequest $request)
    {

        try {
//            $products = Product::whereTranslation('name', $request->name)
//                ->where('category_id', $request->category_id)
//                ->whereBetween('price', [$request->price1, $request->price2])
//                ->latest()->paginate(10);

            $products = Product::where('sku', $request->sku)->where('category_id', $request->category_id)->whereBetween('price', [$request->price1, $request->price2])->when($request->name, function ($q) use ($request) {

                return $q->whereTranslationLike('name', '%' . $request->name . '%');

            })->latest()->paginate(25);


            return view('dashboard.products.index', compact('products'));


        } catch (Exception $e) {
            dd($e);
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Products\ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {


        $products = Product::create($request->except('attribute_name', 'attribute_price', 'attribute_size'));

        $products->addAllMediaFromTokens();


        foreach ($request->attribute_name as $key => $value)


            $attribute = Attribueproduct::create([

                'name' => $request['attribute_name'][$key],
                'price' => $request['attribute_price'][$key],
                'size' => $request['attribute_size'][$key],

                'product_id' => $products->id,

            ]);

        flash(trans('products.messages.created'));

        return redirect()->route('dashboard.products.index', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $attributes = $product->attributeproduct()->paginate();


        return view('dashboard.products.show', compact('product', 'attributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $attributes = $product->attributeproduct()->paginate();

//        $sizes = $product->sizes->map(function ($size) {
//            return [
//                'name' => $size->name,
//                'price' => $size->price,
//            ];
//        });

        return view('dashboard.products.edit', compact('product', 'attributes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Products\ProductRequest $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->except('attribute_name', 'attribute_price', 'attribute_size'));
        if ($request->attribute_name)

            $product->attributeproduct()->delete();

        foreach ($request->attribute_name as $key => $value)


            $attribute = Attribueproduct::create([

                'name' => $request['attribute_name'][$key],
                'price' => $request['attribute_price'][$key],
                'size' => $request['attribute_size'][$key],

                'product_id' => $id,

            ]);

//        foreach ($request->input('sizes', []) as $size) {
//            if ($size != []) {
//                $product->sizes()->create($size);
//            }
//        }

        $product->addAllMediaFromTokens();

        flash(trans('products.messages.updated'));

        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        flash(trans('products.messages.deleted'));

        return redirect()->route('dashboard.products.index');
    }

    public function status($id)
    {

        $product = Product::find($id);
        $status = ($product->status == 1) ? 0 : 1;

        $product->status = $status;

        $product->save();

        return back();


    }


}
