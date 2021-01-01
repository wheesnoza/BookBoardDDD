<?php

namespace App\Src\Employee\Infrastructure;

use App\Models\Employee as EloquentModel;
use App\Src\Employee\Domain\Employee;
use App\Src\Employee\Domain\EmployeeRepository;

class EloquentEmployeeRepository implements EmployeeRepository
{
    /**
     * @var EloquentModel
     */
    private $model;

    public function __construct(EloquentModel $model)
    {
        $this->model = $model;
    }

    public function save(Employee $employee): bool
    {
        $employee = $this->model->create($employee->getPrimitive());

        if (is_null($employee)) {
            return false;
        }

        return true;
    }
}
