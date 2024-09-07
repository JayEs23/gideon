@extends('layouts.adminlayout')

@section('content')
<section class="container-fluid p-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center justify-content-between">
                <div>
                    <h1 class="mb-0 h2 fw-bold">Course Categories</h1>
                </div>
                <div>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ $category->description }}</p>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn text-info"><i class="fe fe-eye"></i> View</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn text-warning"><i class="fe fe-edit"></i> Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-danger"><i class="fe fe-trash"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection