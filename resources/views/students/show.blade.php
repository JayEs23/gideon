@extends('layouts.adminlayout')

@section('content')
<section class="pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-8 rounded-top-md bg-primary"></div>
                <div class="card rounded-0 rounded-bottom px-4 pt-2 pb-4">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="{{ $student->profile_picture ? asset('assets/images/avatar/' . $student->profile_picture) : '../../assets/images/avatar/avatar-default.jpg' }}" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">
                                    {{ $student->name }}
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Beginner">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                        </svg>
                                    </a>
                                </h2>
                                <p class="mb-0 d-block">{{ $student->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-sm btn-outline-success me-2 text-nowrap shadow-lg bg-white rounded" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"><i class="fe fe-check"></i>Assign Course</a>
                            </div>
                            <div class="col-6">

                                <a href="{{ route('students.edit', $student->id)}}" class=" btn btn-outline-primary border-1 bir btn-sm d-none d-md-block text-nowrap shadow-lg bg-white rounded"><i class="fe fe-edit"></i> Edit Student</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1></h1>




    </div>
</section>
<section class="pb-5 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Side Navbar -->
                <ul class="nav nav-lb-tab mb-6" id="tab" role="tablist">
                    <li class="nav-item ms-0" role="presentation">
                        <a class="nav-link active" id="bookmarked-tab" data-bs-toggle="pill" href="#bookmarked" role="tab" aria-controls="bookmarked" aria-selected="true">Courses</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="currentlyLearning-tab" data-bs-toggle="pill" href="#currentlyLearning" role="tab" aria-controls="currentlyLearning" aria-selected="false">
                            Assignment and Projects
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="path-tab" data-bs-toggle="pill" href="#path" role="tab" aria-controls="path" aria-selected="false">Results and Certifications</a>
                    </li>
                </ul>
                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" id="bookmarked" role="tabpanel" aria-labelledby="bookmarked-tab">
                        <div class="row">
                            @foreach ($student->courses as $course)
                            <div class="col-md-12 my-2 p-4 border-3 border-dashed bg-light">
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="mb-2 text-truncate-line-2 "><a href="{{ route("courses.show", $course->id)}}" class="text-inherit">{{ $course->title}}</a></h3>
                                    <!-- List inline -->
                                    <ul class="mb-5 list-inline">
                                        <li class="list-inline-item"><span class="">
                                                <a href="{{ route("categories.show", $course->category->id)}}" class="badge bg-warning mb-3">{{ $course->category->name}}</a>
                                        </li>
                                        <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                </rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                </rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                                                </rect>
                                            </svg>Advance </li>

                                    </ul>
                                    <p>{{ $course->description}}</p>
                                    <!-- Row -->
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="col ms-2">
                                            <span>{{ $course->instructor->name}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class=" bookmark">
                                                <i class="fe fe-bookmark fs-4  "></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px">
    <div class="offcanvas-body" data-simplebar>
        <div class="offcanvas-header px-2 pt-0">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Create Project</h3>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- card body -->
        <div class="container">
            <form action="{{ route('students.assignCourse', $student) }}" method="POST">
                @csrf
                <div class="row d-flex">

                    <div class="mb-3 col-12">
                        <label class="form-label" for="course_id">Choose Course</label>
                        <select class="form-control" name="course_id" id="course_id" required>
                            <option selected value="">Pick A course</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please choose a course.</div>
                    </div>

                    <button type="submit" class="btn btn-success">Assign Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection