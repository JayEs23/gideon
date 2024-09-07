@extends('layouts.adminlayout')

@section('content')
<section class="container-fluid p-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="mb-0 h2 fw-bold">{{ $category->name }}</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">{{ $category->description }}</p>
            <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</section>
@endsection