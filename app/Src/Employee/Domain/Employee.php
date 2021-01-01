<?php

namespace App\Src\Employee\Domain;

class Employee
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    /**
     * Employee constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     */
    public function __construct(string $firstName, string $lastName, string $email, string $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Return a new domain instance of employee
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @return static
     */
    public static function create(string $firstName, string $lastName, string $email, string $password): self
    {
        return new self($firstName, $lastName, $email, $password);
    }

    /**
     * Return primitive attributes
     *
     * @return string[]
     */
    public function getPrimitive(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
