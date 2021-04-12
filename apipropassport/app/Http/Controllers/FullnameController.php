<?php

namespace App\Http\Controllers;

use App\fullname;
use Illuminate\Http\Request;
use Validator;

class FullnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fullnamelist=fullname::paginate();
        return response()->json($fullnamelist,200);
        //
    }


  
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
  $rules=
        [
            'name'=>'required|min:4'
        ];
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return response()->json($validator->errors(),404);

        }
        $allnames=fullname::create($request->all());
        return response()->json($allnames,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fullname  $fullname
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $names=fullname::find($id);

        if(is_null($names))
        {
            return response()->json(["message"=>"Records not founded"],404);

        }
        return response()->json($names,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fullname  $fullname
     * @return \Illuminate\Http\Response
     */
    public function edit(fullname $fullname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fullname  $fullname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        
        $names=fullname::find($id);
        if(is_null($names))
        {
            return response()->json(["message"=>"Records not founded"],404);

        }
        $names->update($request->all());
        return response()->json($names,200);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fullname  $fullname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $names=fullname::find($id);
        if(is_null($names))
        {
            return response()->json(["message"=>"Records not founded"],404);

        }
        $names->delete();
    
      
    }
    public function download()
    {
        # code...
        return response()->download(public_path('a.png'),'nagah phoo');

    }
    public function upload(Request $request)
    {
        # code...
        $filename='m.png';
        $path=$request->file('photo')->move(public_path('/',$filename));
        $photourl=url('/'.$filename);

        return response()->json(['url'=> $photourl],200);

    }
}
