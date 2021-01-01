<?php


namespace App\Http\Controllers\Employee\Create;


use App\Http\Controllers\Controller;

class ShowEmployeeCreateFormController extends Controller
{
    public function __invoke()
    {
        return view('employee.create');
    }
}
