<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use File;
class ProductsController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Product $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.products.';
        $this->routeName = 'products.';
    }
    public function index()
    {
        $rows = Product::orderBy("name", "asc")->get();

        return view($this->viewName . 'index', compact(['rows']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view($this->viewName . 'add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ], [
            'name.required' => 'حقل الاسم مطلوب',

        ]);
        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {

            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        Product::create($input);

        return redirect()->route($this->routeName.'index')->with('flash_del', 'تم الحفظ بنجاح');    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $row = Product::where('id',$id)->first();
        // return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',

        ], [
            'name.required' => 'حقل الاسم مطلوب',

        ]);
        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {
            $row = Product::where('id',$id)->first();

            // Delete File ..
            $file = $row->image;
            $file_name = public_path('uploads/products/' . $file);

                File::delete($file_name);

            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        Product::findOrFail($id)->update($input);

        return redirect()->route($this->routeName.'index')->with('flash_del', 'تم الحفظ بنجاح');    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Product::where('id',$id)->first();
        // Delete File ..
        $file = $row->file_attach;
        $file_name = public_path('uploads/products/' . $file);
        try {
            File::delete($file_name);


           $row->delete();
           return redirect()->back()->with('flash_del', 'تم الحذف بنجاح');

       } catch (QueryException $q) {
           // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
           return redirect()->back()->withInput()->with('flash_danger', 'لا يمكن حذف هذا المنتج لانه مرتبط بجداول اخرى');
       }
    }


    public function UplaodImage($file_request)
    {
        //  This is Image Info..
        $file = $file_request;
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $path = $file->getRealPath();
        $mime = $file->getMimeType();

        // Rename The Image ..
        $imageName = $name;
        $uploadPath = public_path('uploads/products');

        // Move The image..
        $file->move($uploadPath, $imageName);

        return $imageName;
    }
}
