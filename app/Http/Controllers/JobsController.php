<?php

namespace App\Http\Controllers;

use App\Models\Website_job;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class JobsController extends Controller
{ protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Website_job $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.jobs.';
        $this->routeName = 'jobs.';
    }
    public function index()
    {
        $rows = Website_job::orderBy("title", "asc")->get();

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
            'title' => 'required',
            'email' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',

        ], [
            'title.required' => 'حقل الوظيفة مطلوب',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'start_date.required' => 'حقل تاريخ الإعلان مطلوب',
            'end_date.required' => 'حقل إنتهاء تاريخ الإعلان مطلوب',
            'end_date.after' => 'حقل إنتهاء تاريخ الإعلان يجب ان يكون بعد تاريخ بدء الإعلان',

        ]);
        $input = $request->except(['_token']);

        Website_job::create($input);

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
        $row = Website_job::where('id',$id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'email' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ], [
            'title.required' => 'حقل الوظيفة مطلوب',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'start_date.required' => 'حقل تاريخ الإعلان مطلوب',
            'end_date.required' => 'حقل إنتهاء تاريخ الإعلان مطلوب',
            'end_date.after' => 'حقل إنتهاء تاريخ الإعلان يجب ان يكون بعد تاريخ بدء الإعلان',
        ]);
        $input = $request->except(['_token']);

        Website_job::findOrFail($id)->update($input);

        return redirect()->route($this->routeName.'index')->with('flash_del', 'تم الحفظ بنجاح');    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Website_job::where('id',$id)->first();

        try {



           $row->delete();
           return redirect()->back()->with('flash_del', 'تم الحذف بنجاح');

       } catch (QueryException $q) {
           // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
           return redirect()->back()->withInput()->with('flash_danger', 'لا يمكن حذف هذا المنتج لانه مرتبط بجداول اخرى');
       }
    }
}
