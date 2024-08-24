@extends('layouts.backend.app')
@section('title','Add New Tag')
@push('css')

@endpush
@section('content')
<div class="container-fluid">
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-success">
                        <h3>{{ session('success') }}</h3>
                    </div>
                @endif
                <div class="header">
                    <h2>
                        Add New Category
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="category">Category Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="category" name="category" class="form-control"
                                    placeholder="Enter Category Name">
                            </div>
                            @error('category')
                                  <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <label for="category_image">Category Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" id="category_image" name="category_image" class="form-control"
                                   >
                            </div>
                        </div>
                      
                        <a href="{{ route('admin.category.index') }}" class="btn btn-danger m-t-15 waves-effect">Add New Tag</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add New Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
</div>
@endsection
@push('js')

@endpush
