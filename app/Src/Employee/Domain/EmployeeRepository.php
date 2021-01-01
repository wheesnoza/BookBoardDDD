<?php

namespace App\Src\Employee\Domain;

interface EmployeeRepository
{
    /**
     * Persist employee data to table
     *
     * @param Employee $employee
     * @return bool
     */
    public function save(Employee $employee): bool;
}
