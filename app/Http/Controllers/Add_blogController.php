<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class Add_blogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.php 
     * 
php artisan config:clear artisan cache:clear 
php artisan config:cache
php artisan view:clear
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = Blog::latest()->take(6)->get();
        return view('admin.blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcat = Category::orderBy('id')->get();
       
        return view('admin.add-blog',compact('blogcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('blog', $file->getClientOriginalName());
        }
        $requestData['title']              = $request->title;
        $requestData['category']               = $request->category;
        $requestData['image']                =$file->getClientOriginalName();
        $requestData['description']               = $request->description;
        // dd($requestData);
        
        Blog::create($requestData);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        $popularblog = Blog::latest()->take(3)->get();
        $blog = Blog::where('id','=',$request ->id)->first();  
        $blogcat = Category::orderBy('id')->get();
         
        return view('admin.blog-details',compact('blog','blogcat','popularblog'));

       
    }
    public function all()
    {
        // dd("dd");
        $blogs = Blog::orderBy('id')->get();
        return view('admin.all-blog',compact('blogs'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = Blog::findorfail($id);
       $blogcat = Category::orderBy('id')->get();
        return view ('admin.edit-blog',compact('blog','blogcat'));
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
    //    dd($blog_id);
            $id = $request->id;
            // dd($id);
            $requestData['title'] = $request->title;
            $requestData['category'] = $request->category;
            $requestData['image'] = $request->image;
            $requestData['description'] = $request->description;
        //    dd($requestData);
            Blog::where('id',$id)->update($requestData);    
      
        return redirect()->back();
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
