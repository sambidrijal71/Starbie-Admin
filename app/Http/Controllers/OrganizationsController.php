<?php

namespace App\Http\Controllers;

use App\Organizations;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index(){
        $organizations = Organizations::all();
        return view ('organizations.index', compact('organizations'));
    }

    public function create(){
       $organizations = new Organizations();
        return view ('organizations.create', compact('organizations'));

    }

    public function store(){
        Organizations::create($this->validateData());
        return redirect('organizations');
    } 
    
    public function show(Organizations $organizations){
        return view ('organizations.show', compact('organizations'));
    }
    public function edit(Organizations $organizations){
        return view ('organizations.edit', compact('organizations'));
    }

    public function update(Organizations $organizations){
        $organizations->update($this->validateData());
        return redirect ('organizations/'.$organizations->oid);
    }
    public function destroy(Organizations $organizations){
        $organizations->delete();
        return redirect('organizations');
    }

    public function validateData(){
        return request()->validate([
            'name'=>'required',
            'contactno1'=>'required',
            'contactno2'=>'required',
            'headquarter'=>'required',
            'about'=>'required'
        ]);
    }
}