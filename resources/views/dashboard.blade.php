<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Students Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Total Students</h3>
                    <p class="text-4xl mt-4">{{ $totalStudents }}</p>
                </div>
            </div>

            <!-- Apps Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Total Apps</h3>
                    <p class="text-4xl mt-4">{{ $totalApps }}</p>
                </div>
            </div>

            <!-- Courses Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Total Courses</h3>
                    <p class="text-4xl mt-4">{{ $totalCourses }}</p>
                </div>
            </div>

            <!-- Portfolios Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Total Portfolios</h3>
                    <p class="text-4xl mt-4">{{ $totalPortfolios }}</p>
                </div>
            </div>

            <!-- Projects Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Total Projects</h3>
                    <p class="text-4xl mt-4">{{ $totalProjects }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
