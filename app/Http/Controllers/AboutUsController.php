<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(About_us $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.about-page.';
        $this->routeName = 'about-page.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=About_us::all();
        return view($this->viewName . 'index', compact(['rows']));

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
        //
    }

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
        $row=About_us::where('id', $id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',

            'mission' => 'required',
        ], [
            'title.required' => 'حقل عنوان من نحن  مطلوب',


            'mission.required' => 'حقل عنوان الرؤية والأهداف مطلوب',


        ]);

        $input = $request->except(['_token','image']);
        if ($request->hasFile('image')) {
            $attach_image = $request->file('image');

            $input['image'] = $this->UplaodImage($attach_image);

        }
        About_us::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'edit',$id)->with('flash_del', 'تم الحفظ بنجاح');    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /* uplaud image
       */
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
          $uploadPath = public_path('uploads/about_us');

          // Move The image..
          $file->move($uploadPath, $imageName);

          return $imageName;
      }
}
