<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AboutController extends Controller
{
    public function about() {
        return view('site.about');
    }
}
