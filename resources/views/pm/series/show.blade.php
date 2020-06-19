@extends('layouts.pm')
@section('title')Example Series Name @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Series</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$series->name}}</li>
@endsection
@section('content')
GG
@endsection