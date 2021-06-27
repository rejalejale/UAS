<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
}