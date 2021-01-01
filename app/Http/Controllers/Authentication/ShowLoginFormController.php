<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShowLoginFormController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('authentication.login');
    }
}
