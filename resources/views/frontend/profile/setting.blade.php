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
                        <img alt="profile photo" src="{{url('public/images/profile.jpeg')}}">
                        <span class="user-name">
                            {{ Auth::user()->firstname}}
                        </span>
                    </div>
                    <div>

                        <div class="info d-none d-sm-block">
                            @include('frontend.profile._header')

                        </div>
                        <div class="settings-form settings" style="">
                            <h3>Setting</h3>
                            <form action="{{route('setting.save')}}" method="post">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    <span>Email notification</span>
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="checkbox" name="reseive-around-me" value="1"
                                                   @if($setting['reseive_around_me']==1)  checked="checked"
                                                    @endif>Receive News
                                            around me

                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="checkbox" name="loved-topics-update" value="1"
                                                   @if($setting['loved_topics_update']==1)  checked="checked"
                                                    @endif>
                                            Loved topics updates
                                        </label><br>

                                    </div>
                                    <span>Location</span>
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="checkbox" name="show-my-position" value="1"
                                                   @if($setting['show_my_position']==1)  checked="checked"
                                                    @endif>
                                            Show my position
                                        </label>
                                    </div>
                                    <button type="submit" class=" btn-success save-setting">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="settings-form invate-fr" style="display: none">
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