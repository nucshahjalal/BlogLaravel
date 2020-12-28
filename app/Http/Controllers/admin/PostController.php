<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;   //table direction class
use Session;   
use Redirect;

class PostController extends Controller
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
    {     //Dinamic action kora
        $categories = DB::table('categories')->where('status',1)->get();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         //$request->name    value check kora
      $user = Auth::user();   
      $data['name'] = $request->title;
      $data['url'] = str_replace(' ', '-', $request->title);
      
      $data['category_id'] = $request->newcatagories;
      $data['user_id'] = $user->name;  //auth user hota name neva
      $data['description'] = $request->description;
      $data['status'] = $request->status;
     
     $t=time();  //time data getClientOriginalName  a value unique hova
     $postImage = $request->file('post_image');
     $imageName = $t.$postImage->getClientOriginalName();
     $uploadPath = 'admin/product_image/';  //foler fath
     $postImage->move($uploadPath,$imageName);
     $imageUrl = $uploadPath.$imageName;
     $data['image'] = $imageUrl;

     $check = DB::table('posts')->insert($data);
     if(!empty($check)){
        Session::put('success','Post Save Successfully');
        return Redirect::to('/add-post');
     }else{
        Session::put('success','Post Save Unsuccessful');
        return Redirect::to('/add-post');
     }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
