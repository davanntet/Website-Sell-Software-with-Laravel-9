@extends('layout')
@section('content')
<h1>Category Detail</h1>
<p>Name : {{ $category->name }}</p>
<p>Descrition : {{ $category->description }}</p>
@endsection 