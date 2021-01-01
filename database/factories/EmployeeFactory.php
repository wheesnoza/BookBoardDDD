<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * @return EmployeeFactory
     */
    public function staff(): EmployeeFactory
    {
        return $this->afterCreating(function (Employee $employee) {
            $employee->assignRole(['staff']);
        });
    }

    /**
     * @return EmployeeFactory
     */
    public function corporation(): EmployeeFactory
    {
        return $this->afterCreating(function (Employee $employee) {
            $employee->assignRole(['corporation']);
        });
    }
}
