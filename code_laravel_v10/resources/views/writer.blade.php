@extends('layout.app')

@section('title', 'About')

@section('content')
<p>Our Writers:</p>
@foreach ($writers as $writer)
    <p>{{$writer->profile_pict}}</p>
    <p>{{$writer->name}}</p>
    <p>{{$writer->job}}</p>
@endforeach

@endsection
