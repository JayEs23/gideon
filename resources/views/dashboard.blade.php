@extends('layouts.adminlayout')

@section('title', 'Gideon Ihuarulam Platform')

@section('content')
<section class="my-6">
    <!-- Container  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-flex flex-column flex-md-row gap-3 justify-content-between align-items-md-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
                    </div>
                    <div class="d-flex">
                        <!-- <div class="input-group me-3">
                            <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2" />

                            <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                        </div>
                        <a href="#" class="btn btn-primary">Setting</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 mb-4">
            <!-- Total Students Card -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Students</span>
                            </div>
                            <div>
                                <span class="fe fe-users fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">{{ $totalStudents }}</h2>
                            <div class="d-flex flex-row gap-2">
                                <span class="text-success fw-semibold">
                                    <i class="fe fe-trending-up me-1"></i>
                                    +{{ @$newStudents }}
                                </span>
                                <span class="fw-medium">Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Courses Card -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="card">
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Courses</span>
                            </div>
                            <div>
                                <span class="fe fe-book-open fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">{{ $totalCourses }}</h2>
                            <div class="d-flex flex-row gap-2">
                                <span class="text-danger fw-semibold">{{ @$pendingCourses }}+</span>
                                <span class="fw-medium">Number of pending</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Custom JavaScript for this view
    console.log('Dashboard page scripts loaded');
</script>
@endpush