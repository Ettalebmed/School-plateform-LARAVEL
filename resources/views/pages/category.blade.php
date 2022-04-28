@extends("layout.master")

@section('title','Category')

@section('sidebar')
@parent
    <h1>category</h1>
    <p>the member selected is {{$memberSelected}}</p>
@endsection