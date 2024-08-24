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
                        Edit Tag
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="tag_name">Tag Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="tag_name" name="tag_name" class="form-control" value="{{ $tag->name }}"
                                    placeholder="Enter Tag Name">
                            </div>
                            @error('tag_name')
                                  <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Tag</button>
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
