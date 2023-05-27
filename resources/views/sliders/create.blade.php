@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Slider</h1>
        
        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
