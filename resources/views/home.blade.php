@extends('layouts.app')

@section('content')
<!-- Fixed navbar -->

<div class="container">

    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="navbar-header">
                          <a class="navbar-brand" href="#">Settings1</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li><a href="{{url('/settings/home')}}">Home</a></li>
                      <li><a href="{{url('/settings/about')}}">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Portpolio</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
