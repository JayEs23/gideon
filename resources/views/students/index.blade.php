@extends('layouts.adminlayout')

@section('content')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page Header -->
            <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column gap-1">
                    <h1 class="mb-0 h2 fw-bold">
                        Students
                        <span class="fs-5">({{ $students->total() }})</span>
                    </h1>
                    <!-- Breadcrumb  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Students</li>
                        </ol>
                    </nav>
                </div>
                <div class="nav btn-group" role="tablist">
                    <button class="btn btn-outline-secondary active" data-bs-toggle="tab" data-bs-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
                        <span class="fe fe-grid"></span>
                    </button>
                    <button class="btn btn-outline-secondary" data-bs-toggle="tab" data-bs-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
                        <span class="fe fe-list"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Tab -->
            <div class="tab-content">
                <!-- Grid View Tab Pane -->
                <div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                    <div class="mb-4">
                        <input type="search" class="form-control" placeholder="Search Students" />
                    </div>
                    <div class="row gy-4 py-4">
                        @foreach($students as $student)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card">
                                <!-- Card body -->
                                <div class="card-body d-flex flex-column gap-6">
                                    <div class="text-center d-flex flex-column align-items-center gap-3">
                                        <div class="position-relative">
                                            <img src="{{ $student->profile_picture ? asset('assets/images/avatar/' . $student->profile_picture) : '../../assets/images/avatar/avatar-default.jpg' }}" class="rounded-circle avatar-xl" alt="Profile Picture" />
                                            <a href="#" class="position-absolute mt-8 ms-n5">
                                                <span class="status {{ $student->status == 'active' ? 'bg-success' : 'bg-secondary' }}"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">{{ $student->name }}</h4>
                                            <p class="mb-0">
                                                <i class="fe fe-map-pin me-1 fs-6"></i>
                                                {{ $student->location ?: 'Unknown' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <span>Payments</span>
                                            <span class="text-dark">${{ number_format($student->payments_total, 2) }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <span>Joined at</span>
                                            <span>{{ $student->formatted_enrollment_date }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between pt-2">
                                            <span>Courses</span>
                                            <span class="text-dark">{{ $student->courses_count }}</span>
                                        </div>
                                    </div>
                                    <!-- View Profile Link -->
                                    <div class="text-center mt-3">
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination for Grid View -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <nav>
                            <ul class="pagination justify-content-center mb-0">
                                {!! $students->links('vendor.pagination.custom') !!}
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- List View Tab Pane -->
                <div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card Header -->
                        <div class="card-header">
                            <input type="search" class="form-control" placeholder="Search Students" />
                        </div>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table mb-0 text-nowrap table-hover table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Enrolled</th>
                                        <th>Joined At</th>
                                        <th>Total Payment</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center flex-row gap-2">
                                                <div class="position-relative">
                                                    <img src="{{ $student->profile_picture ? asset('assets/images/avatar/' . $student->profile_picture) : '../../assets/images/avatar/avatar-default.jpg' }}" alt="" class="rounded-circle avatar-md" />
                                                    <a href="#" class="position-absolute mt-5 ms-n4">
                                                        <span class="status {{ $student->status == 'active' ? 'bg-success' : 'bg-secondary' }}"></span>
                                                    </a>
                                                </div>
                                                <h5 class="mb-0">{{ $student->name }}</h5>
                                            </div>
                                        </td>
                                        <td>{{ $student->courses_count }} Courses</td>
                                        <td>{{ $student->enrollment_date->format('d M, Y') }}</td>
                                        <td>${{ number_format($student->payments_total, 2) }}</td>
                                        <td>{{ $student->location ?: 'Unknown' }}</td>
                                        <td>
                                            <div class="hstack gap-4">
                                                <a href="{{ route('students.show', $student->id) }}" class="fe fe-eye" data-bs-toggle="tooltip" data-placement="top" title="View Profile"></a>
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link text-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fe fe-trash"></i>
                                                    </button>
                                                </form>
                                                <span class="dropdown dropstart">
                                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="{{ route('students.edit', $student->id) }}">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item" data-confirm="Are you sure you want to delete this student?">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Remove
                                                            </button>
                                                        </form>
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pagination for List View -->
                    <div class="col-lg-12 col-md-12 col-12 mt-3">
                        <nav>
                            <ul class="pagination justify-content-center mb-0">
                                {!! $students->links('vendor.pagination.custom') !!}
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection