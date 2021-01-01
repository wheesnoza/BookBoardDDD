<?php

namespace App\Src\Employee\Application\Create;

use App\Src\Employee\Domain\Employee;
use App\Src\Employee\Domain\EmployeeRepository;

final class EmployeeCreator
{
    /**
     * @var EmployeeRepository
     */
    private $repository;

    /**
     * EmployeeCreator constructor.
     * @param EmployeeRepository $repository
     */
    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     */
    public function __invoke(string $firstName, string $lastName, string $email, string $password)
    {
        $employee = Employee::create($firstName, $lastName, $email, $password);

        $this->repository->save($employee);
    }
}
