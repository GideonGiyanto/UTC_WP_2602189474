@extends('layout.app')

@section('title', 'Detail')

@section('content')
    <p>Category: {{$subject->category}}</p>
    <p>Title : {{$subject->title}}</p>
    <p>{{$subject->image}}</p>
    <p>Date : {{$subject->date}}</p>
    <p>Writer : {{$subject->writer->name}}</p>
    <p>Description <br> {{$subject->description}}</p>
@endsection
