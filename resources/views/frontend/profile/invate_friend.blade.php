@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row d-block d-sm-none">
            <a href="{{route('profile')}}">
                <i class="fa fa-chevron-left"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="cardheader ">

                    </div>
                    <div class="avatar">
                        <img alt="profile photo" src="{{url('/media/4/event.png')}}">
                        <span class="user-name">
                            {{ Auth::user()->firstname}}
                        </span>
                    </div>
                    <div>

                        <div class="info d-none d-sm-block">
                            @include('frontend.profile._header')

                        </div>

                        <div class="settings-form invate-fr">
                            <h3>Invite friends</h3>
                            <ul style="padding: 0px">
                                <a class="fb-invite" href="">
                                    <li><i class="fa fa-facebook" style="margin:3px"></i>Invite Facebook friends</li>
                                </a>
                                <a class="google-invite" href="">
                                    <li class=""><i class="fa fa-google-plus" style="margin:3px"></i>Invite Google +
                                        Friends
                                    </li>
                                </a>
                                <a class="email-invite">
                                    <li class=""><i class="fa fa-envelope-o" style="margin:3px"></i>Invite Friends by
                                        email
                                    </li>
                                </a>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
<style>
</style>