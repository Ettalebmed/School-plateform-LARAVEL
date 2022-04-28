@extends("layout.master")
@section('navbar')
@parent
<li><a href="#"> Link added</a></li>
    
@endsection

@section('title','about-me')

@section('sidebar')
@parent
 
        <p>{{$page_description}}</p>

@endsection 
