<?php

namespace App\Http\Controllers;

use App\Models\Georgia;
use Illuminate\Http\Request;
use DB;
class GeorgiasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $georgia=Georgia::all();
       
        return view('georgias.georgia')
        ->with('georgias',Georgia::orderBy('updated_at','DESC')->get());
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('georgias.georgiaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'rating_star'=>'required',
            'image_path'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $image_name=uniqid().'-'.$request->title.'.'.
        $request->image_path->extension();
        
        $request->image_path->move(public_path('images'),$image_name);

        

        Georgia::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$image_name,
            'rating_star'=>$request->input('rating_star'),
            'user_id'=>auth()->user()->id

        ]);
        return redirect('/georgia')
        ->with('message','Food has been added!');
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
    //    $dishes=DB::select('select* from dishes where id =?',[$id]);
    //    return view('dishes.chinaEdit',['dishes'=>$dishes]);

    $row=DB::table('georgias')
    ->where('id',$id)
    ->first();

    $data = [
        'Info'=>$row,
        'Title'=>'Edit'

    ];

    return view('georgias.georgiaEdit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGeorgia(Request $request)
    {
        

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'rating_star'=>'required',
            'image_path'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $image_name=uniqid().'-'.$request->title.'.'.
        $request->image_path->extension();
        
        $request->image_path->move(public_path('images'),$image_name);
        
        $updating=DB::table('georgias')
        ->where('id',$request->input('cid'))
        ->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$image_name,
            'rating_star'=>$request->input('rating_star'),
            'user_id'=>auth()->user()->id
        ]);

        return redirect('/georgia')
        ->with('message','Food has been Updated!');
        // $title=$request->input('title');
        // $description=$request->input('description');
        // $rating_star=$request->input('rating_star');
        // $image_path=$request->input('image_path');

        // DB::update('update dishes set title =?,description =?,rating_star=?,image_path=?',
        // [$title,$description,$rating_star,$image_path]);

        // return redirect('/china')->with('message','Food has been edit!');

    }

    public function Georgiadelete($id){
        $georgiadelete=DB::table('georgias')
        ->where('id',$id)
        ->delete();
        return redirect('/georgia')
        ->with('message','Food has been Deleted!');
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
