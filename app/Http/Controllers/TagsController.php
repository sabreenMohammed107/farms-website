<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Tag $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.tags.';
        $this->routeName = 'tags.';
    }
    public function index()
    {
        $rows = Tag::orderBy("text", "asc")->get();

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
            'text' => 'required',


        ], [
            'text.required' => 'حقل  العلامة مطلوب',


        ]);
        $input = $request->except(['_token']);
        Tag::create($input);

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
        $row = Tag::where('id',$id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'text' => 'required',


        ], [
            'text.required' => 'حقل  العلامة مطلوب',

        ]);
        $input = $request->except(['_token']);

        Tag::findOrFail($id)->update($input);

        return redirect()->route($this->routeName.'index')->with('flash_del', 'تم الحفظ بنجاح');    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Tag::where('id',$id)->first();

        try {



           $row->delete();
           return redirect()->back()->with('flash_del', 'تم الحذف بنجاح');

       } catch (QueryException $q) {
           // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
           return redirect()->back()->withInput()->with('flash_danger', 'لا يمكن حذف هذا المنتج لانه مرتبط بجداول اخرى');
       }
    }
}
