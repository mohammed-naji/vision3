<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return 'Homepage';
    }

    function about() {
        return 'About Page';
    }

    function user($user = '') {
        return 'Welcome User ' . $user;
    }
}
