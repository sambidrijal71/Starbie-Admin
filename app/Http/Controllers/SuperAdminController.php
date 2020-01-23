<?php

namespace App\Http\Controllers;

use App\Organizations;
use Illuminate\Http\Request;
use App\User;


class SuperAdminController extends Controller
{
    public function index()
    {

        $orgs =Organizations::get();
            
       

        return view ('super_admin.index', array(
            'orgs' => $orgs,
        ));
        // return view('super_admin.index');
    }
    


    public function createUser(Request $request)
    {

        // dd($request->all());
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => \Hash::make($request->password),
        //     'organization_id' => $request->organization_id,
        // ]);

        $user = new User();
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->organization_id = $request->organization_id;
        $user->save();
        
        $user->assignRole('Admin');
        return redirect()->back();

        // return $user;
    }
}
