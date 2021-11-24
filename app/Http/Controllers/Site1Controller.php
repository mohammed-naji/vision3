<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index() {

        $portfolios = [
            [1, 'LOG CABIN', 'cabin.png', 'lorem...'],
            [2, 'TASTY CAKE', 'cake.png', 'lorem...'],
            [3, 'CIRCUS TENT', 'circus.png', 'lorem...'],
            [4, 'CONTROLLER', 'game.png', 'lorem...'],
            [5, 'LOCKED SAFE', 'safe.png', 'lorem...'],
            [6, 'SUBMARINE', 'submarine.png', 'lorem...'],
        ];

        // $portfolios = Portfolio::all();

        // dd($portfolios);

        // return view('site1')->with('name', $name)->with('age', $age);
        // return view('site1.master', compact('name', 'age'));
        return view('site1.index')->with('portfolios', $portfolios);
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
