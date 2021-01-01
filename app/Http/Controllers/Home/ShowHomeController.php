<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShowHomeController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('home');
    }
}
