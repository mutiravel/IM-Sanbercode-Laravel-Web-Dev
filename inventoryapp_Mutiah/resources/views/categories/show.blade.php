@extends('layouts.master')
@section('title')
Detail Data
@endsection

@section('content')
<h2>Show Category {{$category->id}}</h2>
<h4>{{$category->name}}</h4>
<p>{{$category->description}}</p>
@endsection