@extends('layout.app')

@section('title', 'Home')

@section('content')
    <img src="img/1.jpeg" alt="">
    @foreach ($subjects as $subject)
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$subject->image}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $subject->title }}</h5>
                <h5 class="card-title">{{ $subject->writer->name }}</h5>
                <p class="card-text">{{ $subject->description }}</p>
                <a href="#" class="btn btn-primary">Detail</a>
              </div>
          </div>
        </div>
      </div>
      @endforeach
      {{ $subjects->links('pagination::bootstrap-5') }}
@endsection
