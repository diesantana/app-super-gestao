<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcesso;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;


class AboutController extends Controller implements HasMiddleware
{

    public static function middleware() {
        // return [LogAcesso::class];
        return 'log.acesso';
    }

    public function about() {
        return view('site.about');
    }
}
