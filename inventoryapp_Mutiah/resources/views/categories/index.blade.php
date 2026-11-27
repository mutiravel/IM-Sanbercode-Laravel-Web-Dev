@extends('layouts.master')
@section('title')
Tampilan Data
@endsection

@section('content')
<a href="/categories/create" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->description}}</td>
                        <td>
                            <a href="/categories/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/categories/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/categories/{{$value->id}}" method="POST" onsubmit="return confirm('are you sure delete data?')" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection