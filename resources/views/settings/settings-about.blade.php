@extends('layouts.app')

@section('content')
<!-- Fixed navbar -->

<div class="container">

    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="navbar-header">
                          <a class="navbar-brand" href="#">Settings</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="{{url('/settings/home')}}">Home</a></li>
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
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="thumbnail">
                      <a href="/w3images/lights.jpg">
                        <img src="{{URL::asset('images/7.jpg')}}" style="width:100%">
                      </a>
                    </div>
                    <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Browse</span>
                            <input type="text" class="form-control " placeholder="" aria-describedby="basic-addon1" disabled="">
                        </div>
                  </div>


                   

                  
             </div>

                    <div class="form-group ">
                    <br>
                       <label for="usr">Title:</label>
                    <input type="text" class="form-control " id="usr">
                  </div>

                </div>
               
              
            
           

            </div>

              

        </div>
    </div>
</div>
@endsection
