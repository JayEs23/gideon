<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Seed the students table.
     *
     * @return void
     */
    public function run()
    {
        $students = [];
        for ($i = 1; $i <= 10; $i++) {
            $students[] = [
                'name' => 'Student ' . $i,
                'code' => 'STU' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'email' => 'student' . $i . '@example.com',
                'password' => Hash::make('password@123'), // Or use any password of your choice
                'profile_picture' => 'avatar' . $i . '.jpg',
                'enrollment_date' => now()->subMonths(rand(1, 12))->toDateString(),
                'status' => ['active', 'inactive', 'graduated'][array_rand(['active', 'inactive', 'graduated'])],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('students')->insert($students);
    }
}
