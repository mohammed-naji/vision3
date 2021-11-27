<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_submit(Request $request)
    {
        // dd($request->all());
        // dd($request->input('name'));
        // dd($request->name);
        // $GLOBAL, $_SERVER, $_ENV, $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_FILES

        // $name = $request->input('name', 'User');
        $name = $request->name;
        $age = $request->age;

        // echo "Welcome, $name your age is $age";

        return view('forms.form1_data', compact('name', 'age'));
    }

    // public function FunctionName(Type $var = null)
    // {
    //     # code...
    // }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_submit(Request $request)
    {
        $request->validate([
            'password' => 'confirmed'
        ]);

        dd($request->all());
    }
}
