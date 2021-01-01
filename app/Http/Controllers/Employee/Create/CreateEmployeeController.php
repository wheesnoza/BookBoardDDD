<?php

namespace App\Http\Controllers\Employee\Create;

use App\Http\Controllers\Controller;
use App\Src\Employee\Application\Create\EmployeeCreator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CreateEmployeeController extends Controller
{
    /**
     * @var EmployeeCreator
     */
    private $creator;

    /**
     * CreateEmployeeController constructor.
     * @param EmployeeCreator $creator
     */
    public function __construct(EmployeeCreator $creator)
    {
        $this->creator = $creator;
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $attributes = $request->all();

        $this->creator->__invoke(
            $attributes['first_name'],
            $attributes['last_name'],
            $attributes['email'],
            $attributes['password']
        );

        return view('home');
    }
}
