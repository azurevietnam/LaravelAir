<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
    public function showHomepage()
    {
        return view('homepage');
    }
}
