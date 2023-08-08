<?php

namespace App\Http\Controllers;

use App\Models\Product_image;
use Illuminate\Http\Request;
use File;
use Illuminate\Database\QueryException;
use Image;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token','image']);
        $this->validate($request, [
            'image' => 'required',


        ], [
            'image.required' => 'إختر الصورة أولا',



        ]);
        if ($request->hasFile('image')) {

            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        Product_image::create($input);

        return redirect()->back()->with('flash_del', 'تم الحفظ بنجاح');    }



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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {
            $row = Product_image::where('id',$id)->first();

            // Delete File ..
            $file = $row->image;
            $file_name = public_path('uploads/products/' . $file);

                File::delete($file_name);

            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        Product_image::findOrFail($id)->update($input);

        return redirect()->back()->with('flash_del', 'تم الحفظ بنجاح');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $row=Product_image::where('id',$id)->first();
        // Delete File ..
        $file = $row->file_attach;
        $file_name = public_path('uploads/galleries/' . $file);
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

        /**
         * New Resize
         */

         //  This is Image Info..
         $image = $file_request;
         $name = $image->getClientOriginalName();

         $imageName = $name;

        $imageName = time().'.'.$image->extension();

        $destinationPathThumbnail = public_path('uploads/galleries');
        if (!file_exists($destinationPathThumbnail)) {
            mkdir($destinationPathThumbnail, 777, true);
        }
        $img = Image::make($image->path());
        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();

        })->save($destinationPathThumbnail.'/'.$imageName);

        $destinationPath = public_path('/images');
        $image->move($destinationPathThumbnail, $imageName);

        return $imageName;
    }
}
