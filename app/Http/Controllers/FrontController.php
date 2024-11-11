<?php

namespace App\Http\Controllers;



class FrontController 
{
    public function header(){

       return  view('headerpage');
    }

    public function firsthorsedetails(){

        return view('firsthorsedetails');
    }

    public function secondhorsedetails(){
        
        return view('secondhorsedetails');
    }
}
