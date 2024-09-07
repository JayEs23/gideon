@extends('layouts.adminlayout')

@section('title', 'Courses List')

@section('content')
<section class="container mt-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="fw-bold">Courses List</h1>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Create New Course</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-sm table-hover">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->category->name }}</td>
                        <td>{{ $course->creator->name }}</td>
                        <td>{{ $course->status }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm"><i class="fe fe-eye"></i></a>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm"><i class="fe fe-edit"></i></a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection