<!-- resources/views/sliders/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Slider List</h1>
        <a href="{{ route('sliders.create') }}" class="btn btn-primary">Add Slider</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" style="width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this slider?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    