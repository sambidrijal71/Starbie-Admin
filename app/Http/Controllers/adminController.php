<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\Organizations;
use DB;
use Auth;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        $admin = Admin::orderBy('aid')->get();
        return view ('admin_pages.admin_index')->with('admin',$admin);
        
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('admin_pages.admin_create');
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
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            // 'dob'=>'required',
            // 'gender'=>'required',
            // 'nationality'=>'required',
            // 'profilepicture'=>'required',
            // 'jobposition'=>'required',
            // 'email'=>'required',
            // 'password'=>'required',
            // 'postaladdress'=>'required',
            // 'address'=>'required',
        ]);
       
        // create admin
        $admin = new Admin();
        $admin->fname=$request->input('fname');
        $admin->mname=$request->input('mname');
        $admin->lname=$request->input('lname');
        // $admin->dob=$request->input('dob');
        // $admin->gender=$request->input('gender');
        // $admin->nationality=$request->input('nationality');
        // $admin->profilepicture=$request->input('profilepicture');
        // $admin->jobposition=$request->input('jobposition');
        // $admin->email=$request->input('email');
        // $admin->password=$request->input('password');
        // $admin->postaladdress=$request->input('postaladdress');
        // $admin->address=$request->input('address');
        // $admin->save();
        
        return redirect('/admin')->with('success','User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $aid
     * @return \Illuminate\Http\Response
     */
    public function show($aid)
    {
        $admin =  Admin::find($aid);
        return view('admin_pages.admin_show')->with ('admin',$admin);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $aid
     * @return \Illuminate\Http\Response
     */
    public function edit($aid)
    {
        $admin = Admin::FindOrFail($aid);
        return view('admin_pages.admin_edit',['admin',$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $aid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $aid)
    {
        $this->validate($request,[
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'nationality'=>'required',
            'profilepicture'=>'required',
            'jobposition'=>'required',
            'email'=>'required',
            'password'=>'required',
            'postaladdress'=>'required',
            'address'=>'required',
        ]);
       
        // create admin
        $admin = new Admin();
        $admin->fname=$request->input('fname');
        $admin->mname=$request->input('mname');
        $admin->lname=$request->input('lname');
        $admin->dob=$request->input('dob');
        $admin->gender=$request->input('gender');
        $admin->nationality=$request->input('nationality');
        $admin->profilepicture=$request->input('profilepicture');
        $admin->jobposition=$request->input('jobposition');
        $admin->email=$request->input('email');
        $admin->password=$request->input('password');
        $admin->postaladdress=$request->input('postaladdress');
        $admin->address=$request->input('address');
        $admin->save();

        return redirect('/admin')->with('success','Admin updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $aid
     * @return \Illuminate\Http\Response
     */
    public function destroy($aid)
    {
        $admin=admin::find($aid);
        $admin->delete();
        return redirect('/admin');with (['Message'=>"Successfully deleted"]);
    }
}
