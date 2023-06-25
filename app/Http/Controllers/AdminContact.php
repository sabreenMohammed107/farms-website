<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;

class AdminContact extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Contact_us $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.contact.';
        $this->routeName = 'contact.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Contact_us::all();
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
        $row=Contact_us::where('id', $id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'address' => 'required',

            'email' => 'required|email',
            'phone' => 'required',
            'mobile' => 'required',
        ], [
            'phone.required' => 'حقل الهاتف مطلوب',
            'mobile.required' => 'حقل الموبايل مطلوب',

            'address.required' => 'حقل العنوان مطلوب',
            'email.email' => 'حقل  البريد الالكتروني يجب ان يكون يحتوى على @',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',

        ]);

        $input = $request->except(['_token']);

    Contact_us::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'edit',$id)->with('flash_del', 'تم الحفظ بنجاح');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
