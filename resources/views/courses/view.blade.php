@extends('layouts.adminlayout')

@section('content')
<!-- Container fluid -->
<section class="container-fluid p-5 m-3">
    <div class="row mb-4">
        <!-- Page header -->
        <div class="col-12">
            <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center justify-content-between">
                <div>
                    <h1 class="mb-0 h2 fw-bold">{{ $course->title }}</h1>
                </div>
                <div class="d-flex align-items-center">
                    <!-- avatar group -->
                    <!-- (Add any relevant avatars or icons here, if needed) -->
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Tab -->
    <div class="row mb-4">
        <div class="col-12">
            <ul class="nav nav-lb-tab">
                <li class="nav-item ms-0 me-3">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <!-- Add more tabs if needed -->
            </ul>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-12 col-xl-8 col-12">
            <div class="d-flex flex-column gap-4">
                <!-- Course Summary Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Course Summary</h4>
                            <!-- Add any dropdown or settings if needed -->
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{ $course->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4 text-primary" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                        </svg>
                                        <div>
                                            <h5 class="mb-0 text-body">Start Date</h5>
                                        </div>
                                    </div>
                                    <p class="text-dark mb-0 fw-semibold">{{ \Carbon\Carbon::parse($course->start_date)->format('d M, Y') }}</p>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4 text-primary" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                        </svg>
                                        <div>
                                            <h5 class="mb-0 text-body">End Date</h5>
                                        </div>
                                    </div>
                                    <p class="text-dark mb-0 fw-semibold">{{ \Carbon\Carbon::parse($course->end_date)->format('d M, Y') }}</p>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clock text-primary" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                        <div>
                                            <h5 class="mb-0 text-body">Estimate Time</h5>
                                        </div>
                                    </div>
                                    <p class="text-dark mb-0 fw-semibold">{{ $course->estimate_time }}</p>
                                </div>
                            </li>
                            <li class="list-group-item px-0 pb-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-currency-dollar text-primary" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg>
                                        <div>
                                            <h5 class="mb-0 text-body">Cost</h5>
                                        </div>
                                    </div>
                                    <p class="text-dark mb-0 fw-semibold">${{ number_format($course->cost, 2) }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Budget Card (if applicable) -->
                <!-- Add any budget details if needed -->

            </div>
        </div>

        <div class="col-md-12 col-xl-4 col-12">
            <div class="d-flex flex-column gap-4">
                <!-- Launch Date Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Launch Date</h4>
                            <!-- Add any dropdown or settings if needed -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-row gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date text-primary" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                            </svg>
                            <h5 class="mb-0">Launch Date:</h5>
                            <p class="text-dark mb-0 fw-semibold">{{ \Carbon\Carbon::parse($course->launch_date)->format('d M, Y') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Details -->
                <!-- Add any additional details if needed -->

            </div>
        </div>
    </div>
</section>
@endsection