<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        $title = 'Starbie,Welcome ';
        // return view ('pages.index', compact('title'));
         return view ('pages.index')->with('title',$title);

    }
    public function about(){
        $title = "About us";
        return view ('pages.aboutus',compact('title'));
    }
    public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=> ['Service 1', 'You can redirect to this page from pageController.php','services 2']
        );

        return view ('pages.services')->with ($data);
    }
}
