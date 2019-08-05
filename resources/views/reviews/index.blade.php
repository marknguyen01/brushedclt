@extends('voyager::master')
@section('content')
  @if(isset($authUrl))
    <a class='login' href='{{ $authUrl }}'>Connect Me!</a>
  @endif
@stop
