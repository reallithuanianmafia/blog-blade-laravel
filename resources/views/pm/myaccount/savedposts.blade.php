@extends('layouts.pmseries')
@section('title')Saved Posts @endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('pm.home')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('pm.myaccount.index')}}">My Account</a></li>
<li class="breadcrumb-item active" aria-current="page">Saved Posts</li>
@endsection
@section('sidebar')
    @include('pminc.myaccnavbarforsidebar')
@endsection
@section('content')
<div class="col-md-8">
    <div class="row">
    @foreach($posts as $post)
            @include('pminc.postshowcase')
    @endforeach
    </div>
</div>
@endsection
