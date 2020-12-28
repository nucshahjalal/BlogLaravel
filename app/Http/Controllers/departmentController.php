<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
//use Departments;
use Session;
// use redirect;

class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $orderby=Department::orderBy('id','desc')->get();
        return view('admin.department.create',compact('orderby'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Department::create($data);
        return back()->with('Success','Data inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $data= Department::find($id);
   
    return view('admin.department.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  
       $dept_id = $request->dept_id;
       $data = Department::find($dept_id);
       $data->dept_name = $request->dept_name;
       $data->dept_code = $request->dept_code;
       $data->save();
       Session::flash('message', 'Data successfully Updated!');
       return redirect('departments/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Department::find($id);

        $data->delete();
        return back()->with('Success','Data deleted');
    }
}
