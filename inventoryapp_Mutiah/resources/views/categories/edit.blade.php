@extends('layouts.master')
@section('title')
Edit Data
@endsection

@section('content')
<div>
        <h2>Edit Category {{$category->id}}</h2>
        <form action="/categories/{{$category->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" id="name" placeholder="Masukkan Name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="{{$category->description}}" id="description" placeholder="Masukkan Description">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </br>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    @endsection
    