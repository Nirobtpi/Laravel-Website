@extends('layouts.backend.app')
@section('title','Update category')
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
                        Edit Category
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="category">Category Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="category" name="category" class="form-control" value="{{ $category->name }}"
                                    placeholder="Enter Category Name">
                            </div>
                            @error('category')
                                  <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <label for="category_image">Category Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" id="category_image" name="category_image"  class="form-control" >
                                <img src="{{ asset('storage/'.$category->image) }}" style="width: 150px; height:150px" alt="">
                            </div>
                             @error('category_image')
                                  <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Category</button>
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
