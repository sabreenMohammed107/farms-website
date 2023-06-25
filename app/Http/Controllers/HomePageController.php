<?php

namespace App\Http\Controllers;

use App\Models\Home_page;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Home_page $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.home-page.';
        $this->routeName = 'home-page.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Home_page::all();
        return view($this->viewName . 'index', compact(['rows']));

    }

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
        $row=Home_page::where('id', $id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'title' => 'required',

            'details' => 'required',
            'why_us_title' => 'required',
            'why_us_details' => 'required',
        ], [
            'title.required' => 'حقل عنوان الفقره الاولي مطلوب',
            'details.required' => 'حقل تفاصيل الفقرة الاولي مطلوب',

            'why_us_title.required' => 'حقل عنوان الفقرة الثانية مطلوب',
            'why_us_details.required' => 'حقل تفاصيل الفقرة الثانيه  مطلوب',

        ]);

        $input = $request->except(['_token']);

        Home_page::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'edit',$id)->with('flash_del', 'تم الحفظ بنجاح');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
