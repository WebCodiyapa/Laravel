@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="cardheader">
                    </div>
                    <div class="avatar">
                        <form action="{{route('image.edit')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="container">
                                <label for="logo-uploader" class="user-image">
                                    <i class="fa fa-plus" aria-hidden="true"></i>

                                </label>
                                <input style="display: none" type="file" id="logo-uploader" name="logo">
                                <img style="display: none" class="preview_image" src="#"/>

                                <div class="form-group">
                                    <button class=" btn-default" style="background-color: #007bff">Save</button>
                                    <button class=" btn-default cancale-user-image" style="background-color: #007bff">Cancel</button>
                                </div>

                                @if($errors->first('logo'))
                                    <div class="alert alert-danger custom-alert">
                                        <ul>
                                            <li>{{ $errors->first('logo') }}</li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-5">
                                <form action="{{route('post.edit')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="name">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                               value="{{ $user->firstname }}">
                                    </div>
                                    @if($errors->first('firstname'))
                                        <div class="alert alert-danger custom-alert">
                                            <ul>
                                                <li>{{ $errors->first('firstname') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="name">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                               value="{{ $user->lastname }}">
                                    </div>
                                    @if($errors->first('lastname'))
                                        <div class="alert alert-danger custom-alert">
                                            <ul>
                                                <li>{{ $errors->first('lastname') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                               value="{{ $user->email }}">
                                    </div>
                                    @if($errors->first('email'))
                                        <div class="alert alert-danger custom-alert">
                                            <ul>
                                                <li>{{ $errors->first('email') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <button class="btn-default" style="background-color: #007bff">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 edit-user-info d-none d-sm-block">
                                <div class="edit-location" style="float: left"><span>15</span><br><i class="fa fa-map-marker"></i></div>
                                <div class="edit-camera" style="float: left"><span>4</span><br><i class="fa fa-camera-retro"></i></div>
                                <div class="edit-point" style="float: left"><span>1</span><br><i class="fa fa-circle-o"></i></div>
                            </div>
                        </div>
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