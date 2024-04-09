<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        return view('about');
    }

    public function start()
    {

        return view('start');
    }
    public function product()
    {

        return view('product');
    }
    public function delivery()
    {

        return view('delivery');
    }
    public function guarantee()
    {

        return view('guarantee');
    }
    public function docs()
    {

        return view('docs');
    }
    public function partner()
    {

        return view('partner');
    }

}
