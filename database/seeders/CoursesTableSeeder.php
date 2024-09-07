<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    /**
     * Seed the courses table.
     *
     * @return void
     */
    public function run()
    {
        $courses = [];
        $categoryIds = DB::table('course_categories')->pluck('id');

        for ($i = 1; $i <= 10; $i++) {
            $courses[] = [
                'title' => 'Course ' . $i,
                'description' => 'Description for Course ' . $i,
                'category_id' => $categoryIds->random(),
                'created_by' => 1, // Assuming a user with ID 1 exists
                'slug' => 'course-' . $i,
                'start_date' => now()->addMonths(rand(1, 3))->toDateString(),
                'end_date' => now()->addMonths(rand(4, 6))->toDateString(),
                'status' => ['active', 'archived'][array_rand(['active', 'archived'])],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('courses')->insert($courses);
    }
}
