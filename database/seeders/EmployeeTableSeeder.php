<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = (new Employee())->getTable();

        DB::table($table)->truncate();

        Employee::factory()->corporation()->create([
            'first_name' => '英詞',
            'last_name' => '渡辺',
            'email' => 'wheesnoza@gmail.com'
        ]);

        Employee::factory()
            ->count(10)
            ->staff()
            ->create();
    }
}
