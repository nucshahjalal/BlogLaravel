<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = category::all();
        return view('admin.categories.manage-category',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo $category_name = $request->category;
        // echo $status = $request->status;
        $category = new category;
        $category->name = $request->category;
        $category->url = str_replace(' ', '-', $request->category);
        $category->status = $request->status;
        $category->save();
         Session::put('success','Category Saved Successfully');
        return redirect('/manage-category');
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
       $category = category::find($id);
        return view('admin.categories.edit',compact('category'));
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
      $category_id =  $request->category_id;
      $category = Category::find($category_id);
      $category->name = $request->category;
      $category->url = str_replace(' ', '-', $request->category);
      $category->status = $request->status;
      $category->save();
      Session::put('success','Category Updated Successfully');
      return redirect('/manage-category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Category::find($id);
        $data->delete();
        return back()->with('success','Data delete successfull');
      
    }
}
