<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
            'password' => 'required|confirmed'
        ]);

        // dd($request->all());
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_submit(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|regex:/^[a-zA-Z0-9 ]+$/|min:8|max:20',
            'start_from' => 'required',
            'end_to' => 'required|after:start_from',
            'image' => 'required|image|mimes:png,jpg'
        ], [
            'email.required' => 'كيف بدك تسجل بدون ايميل افهم بس !!!!',
            'password.required' => 'بعينك الله مش رح نخترق حسابك اكتب باسسورد',
        ]);

        // $validator = Validator::make($request->all(), [
        //     'email' => ['required', 'email'],
        //     'password' => 'required|confirmed|regex:/^[a-zA-Z0-9 ]+$/|min:8|max:20',
        //     'start_from' => 'required',
        //     'end_to' => 'required|after:start_from',
        //     'image' => 'required|image|mimes:png,jpg'
        // ]);

        // if($validator->fails()) {
        //     return redirect()->back()->with('msg', 'معلش ي حبيبي في عندك شوية اخطاء بالله عليك صلحها');
        // }

        return 'Done';
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_submit(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf,docx'
        ]);
        // dd($request->all());
        // dd($request->all());
        // $filename = $request->file('cv')->getClientOriginalName();
        $ex = $request->file('cv')->getClientOriginalExtension();
        $name = 'vision3_'.rand().'_'.time().'.'.$ex;
        $request->file('cv')->move(public_path('uploads'), $name);

        // foreach($request->file('cv') as $file) {
        //     $ex = $file->getClientOriginalExtension();
        //     $name = 'vision3_'.rand().'_'.time().'.'.$ex;
        //     $file->move(public_path('uploads'), $name);
        // }
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5_submit(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required',
            'mobile'  => 'required',
            'subject'  => 'required',
            'message'  => 'required',
        ]);

        Mail::to('admin@admin.com')->send(new ContactUsMail($request->all()));

        dd($request->all());
    }
}
