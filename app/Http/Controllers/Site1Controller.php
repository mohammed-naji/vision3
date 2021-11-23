<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index() {

        $name  = 'Ahmed';
        $age = 30;

        // return view('site1')->with('name', $name)->with('age', $age);
        return view('site1.index', compact('name', 'age'));
        // return view('site1', [
        //     'name' => $name,
        //     'age' => $age
        // ]);
    }

    function portfolio() {
        return view('site1.portfolio');
    }

    function about() {
        return view('site1.about');
    }

    function contact() {
        return view('site1.contact');
    }

    function contact_post() {
        return 'contact_post';
    }
}
