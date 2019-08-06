@extends('voyager::master')
@section('content')
  <div class="container-fluid">
    <h1 class="page-title">
        Reviews
    </h1>
  </div>
  <div class="page-content browse container-fluid">
    <div class="review">
      @if(isset($reviews))
        @foreach($reviews as $review)
          {{ $review->username }}
          {{ $review->rating }}
        @endforeach
      @endif
    </div>
    @if(isset($authURL))
      <a href='{{ $authURL }}' class="btn btn-success btn-add-new">Login</a>
    @else
      <a href="{{ route('review.refresh') }}" class="btn btn-primary btn-add-new">Refresh</a>
    @endif
  </div>
@stop
