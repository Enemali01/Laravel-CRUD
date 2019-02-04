<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\details;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $details = \App\details::all();
      return view('index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail= new details;
        $detail->name=$request->get('name');
        $detail->phone=$request->get('phone');
        $detail->email=$request->get('email');
        $detail->city=$request->get('city');
        $detail->address=$request->get('address'); 
        $detail->dob=$request->get('dob');
         
        $detail->save();
        
        return redirect('details')->with('success', 'Information has been added');
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
        $details = \App\details::find($id);
        return view('edit',compact('detail','id'));
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
        $details = \App\details::find($id);
        $details->delete();
        return redirect('details')->with('success','Information has been  deleted');
    }
}
