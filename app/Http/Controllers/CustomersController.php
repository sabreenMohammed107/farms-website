<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
use Image;
class CustomersController extends Controller
{

    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Customer $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.customers.';
        $this->routeName = 'customers.';
    }
    public function index()
    {
        $rows = Customer::orderBy("name", "asc")->get();

        return view($this->viewName . 'index', compact(['rows']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->viewName . 'add');
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
        Customer::create($input);

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
        $row = Customer::where('id',$id)->first();
        return view($this->viewName . 'edit', compact(['row']));
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
            $row = Customer::where('id',$id)->first();

            // Delete File ..
            $file = $row->image;
            $file_name = public_path('uploads/customers/' . $file);

                File::delete($file_name);

            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        Customer::findOrFail($id)->update($input);

        return redirect()->route($this->routeName.'index')->with('flash_del', 'تم الحفظ بنجاح');    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Customer::where('id',$id)->first();
        // Delete File ..
        $file = $row->file_attach;
        $file_name = public_path('uploads/customers/' . $file);
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
         $image = $file_request;
         $name = $image->getClientOriginalName();
        // $ext = $file->getClientOriginalExtension();
        // $size = $file->getSize();
        // $path = $file->getRealPath();
        // $mime = $file->getMimeType();

        // // Rename The Image ..
         $imageName = $name;
        // $uploadPath = public_path('uploads/customers');

        // // Move The image..
        // $file->move($uploadPath, $imageName);
        $imageName = time().'.'.$image->extension();

        $destinationPathThumbnail = public_path('uploads/customers');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPathThumbnail.'/'.$imageName);

        $destinationPath = public_path('/images');
        $image->move($destinationPathThumbnail, $imageName);

        return $imageName;
    }
}
