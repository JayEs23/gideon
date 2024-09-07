<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategoriesTableSeeder extends Seeder
{
    /**
     * Seed the course_categories table.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Data Analytics', 'description' => 'Courses related to data analytics', 'slug' => 'data-analytics'],
            ['name' => 'Investment Guidance', 'description' => 'Courses on investment strategies and tips', 'slug' => 'investment-guidance'],
            ['name' => 'Personal Finance', 'description' => 'Courses on managing personal finances', 'slug' => 'personal-finance'],
            ['name' => 'Financial Planning', 'description' => 'Courses on financial planning techniques', 'slug' => 'financial-planning'],
            ['name' => 'Economics', 'description' => 'Courses related to economics principles', 'slug' => 'economics'],
            ['name' => 'Accounting', 'description' => 'Courses on accounting principles', 'slug' => 'accounting'],
            ['name' => 'Investment Analysis', 'description' => 'Courses on investment analysis methods', 'slug' => 'investment-analysis'],
            ['name' => 'Corporate Finance', 'description' => 'Courses on corporate finance management', 'slug' => 'corporate-finance'],
            ['name' => 'Risk Management', 'description' => 'Courses on managing financial risks', 'slug' => 'risk-management'],
            ['name' => 'Financial Modeling', 'description' => 'Courses on financial modeling techniques', 'slug' => 'financial-modeling'],
        ];

        DB::table('course_categories')->insert($categories);
    }
}
