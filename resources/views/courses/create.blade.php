@extends('layouts.adminlayout')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                    <h1 class="mb-0 h2 fw-bold">Create New Course</h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Courses</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Course</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary me-2">Back to Courses</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <!-- row -->
        <div class="row">
            <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body p-lg-6">
                        <!-- form -->
                        <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data" class="row gx-3 needs-validation" novalidate>
                            @csrf

                            <!-- Title -->
                            <div class="mb-3 col-12">
                                <label class="form-label">
                                    Title
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter course title" required />
                                <div class="invalid-feedback">Please enter course title.</div>
                            </div>

                            <!-- Description -->
                            <div class="mb-3 col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter brief about course..." rows="3" required></textarea>
                                <div class="invalid-feedback">Please enter a description.</div>
                            </div>

                            <!-- Category -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">
                                    Category
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="category_id" required>
                                    <!-- Assuming categories are available in $categories variable -->
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a category.</div>
                            </div>

                            <!-- Start Date -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">
                                    Start Date
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input class="form-control flatpickr" type="text" name="start_date" placeholder="Select Date" aria-describedby="basic-addon2" required />
                                    <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                                </div>
                                <div class="invalid-feedback">Please select a start date.</div>
                            </div>

                            <!-- End Date -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">
                                    End Date
                                </label>
                                <div class="input-group">
                                    <input class="form-control flatpickr" type="text" name="end_date" placeholder="Select Date" aria-describedby="basic-addon3" />
                                    <span class="input-group-text" id="basic-addon3"><i class="fe fe-calendar"></i></span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">
                                    Status
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <div class="invalid-feedback">Please select a status.</div>
                            </div>

                            <!-- Logo -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">Course Logo</label>
                                <input class="form-control" type="file" name="logo" />
                            </div>

                            <!-- Cover Photo -->
                            <div class="mb-3 col-md-6 col-12">
                                <label class="form-label">Cover Photo</label>
                                <input class="form-control" type="file" name="cover_photo" />
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('courses.index') }}" class="btn btn-outline-primary ms-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection