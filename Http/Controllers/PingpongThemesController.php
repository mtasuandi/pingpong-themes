<?php

namespace Modules\Pingpongthemes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class PingpongThemesController extends Controller
{   
    public function index()
    {
        return view('pingpongthemes::index');
    }   
}
