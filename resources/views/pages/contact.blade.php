@extends('layout.master')
@section('title')
    Contact
@endsection

@section('sidebar')
@parent
    <div>Hi From Here You Can Contact Me</div>
    <span>{{$phone}}</span><br>
    <span>{{$email}}</span>
@endsection
{{-- //you can use @stop = @endsection --}}