<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ 
    	$name = 'index';
    	return view('pages.index')->with('name',$name);

    }

    function about(){
    	$name = 'about'; 
    	return view('pages.about')->with('name',$name);
    }

    function prolang(){
    	$myname = array('j'=>'java', 'c'=>'c++', 'p'=> 'php');
	    return view('pages.programminglanguage')->with('myname',$myname);
    }

    function home(){

    return view('welcome');

    }

       
}
