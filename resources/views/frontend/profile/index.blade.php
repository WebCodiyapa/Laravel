@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="cardheader">
                    </div>
                    <div class="avatar">
                        <img alt="profile photo" src="{{url('/media/4/event.png')}}">
                        <span class="user-name">
                            {{$user->firstname}}
                        </span>
                    </div>
                    <div>

                        <div class="info">

                            @include('frontend.profile._header')

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="row d-block d-sm-none">
            <div class="col-sm-12 ">
                <div class="btn btn-success"
                     style="margin-left: 0px; width: 100%; margin-bottom: 5px; border-radius: 0%">Claim your activity
                </div>
                <div style="float: left; width: 10%;margin-right:40px;"><a href=""><i class="fa fa-location-arrow"></i></a>
                </div>
                <div style="float: left; width: 10%; margin-right:41px;"><a href=""><i class="fa fa-heart"></i></a>
                </div>
                <div style="float: left; width: 10%; margin-right:41px;"><a href=""><i class="fa fa-plus"></i></a></div>
                <div style="float: left; width: 10%; margin-right:41px;"><a href=""><i class="  fa fa-comments"></i></a>
                </div>
                <div style="float: left; width: 10%; margin-right:15px;"><a href=""><i class="fa fa-user"></i></a></div>
            </div>
        </div>
    </div>
@endsection
<style>

</style>