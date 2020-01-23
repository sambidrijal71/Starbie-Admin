<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\branch;
use DB;

class branchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch=Branch::orderby('bid')->get();
        return view ('branch_pages.branch_index')->with('branch',$branch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('branch_pages.branch_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'oid'=>'required',
            'addressid'=>'required',
            'postaladdressid'=>'required',
            'pobox'=>'required',
            'contactno'=>'required',
            'about'=>'required',
            'gallery'=>'required',
        ]);
       
        // create branch
        $branch = new Branch();
        $branch->oid=$request->input('oid');
        $branch->addressid=$request->input('addressid');
        $branch->postaladdressid=$request->input('postaladdressid');
        $branch->pobox=$request->input('pobox');
        $branch->contactno=$request->input('contactno');
        $branch->about=$request->input('about');
        $branch->gallery=$request->input('gallery');
        $branch->save();

        return redirect('/branch')->with('Success','Branch Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bid)
    {
        $branch =  Branch::find($bid);
        return view('branch_pages.branch_show')->with ('branch',$branch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bid)
    {
        $branch = Branch::find($bid);
        return view('branch_pages.branch_edit')->with('branch',$branch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bid)
    {
        $this->validate($request,[
            'oid'=>'required',
            'addressid'=>'required',
            'postaladdressid'=>'required',
            'pobox'=>'required',
            'contactno'=>'required',
            'about'=>'required',
            'gallery'=>'required',
        ]);
        $branch = new Branch();
        $branch->oid=$request->input('oid');
        $branch->addressid=$request->input('addressid');
        $branch->postaladdressid=$request->input('postaladdressid');
        $branch->pobox=$request->input('pobox');
        $branch->contactno=$request->input('contactno');
        $branch->about=$request->input('about');
        $branch->gallery=$request->input('gallery');
        $branch->save();

        return redirect('/branch')->with('success','Branch Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bid)
    {
        $branch=branch::find($bid);
        $branch->delete();
        return redirect('/branch');with (['Message'=>"Branch successfully deleted"]);
    }
}
