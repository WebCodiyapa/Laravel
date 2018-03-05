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
                        <div class="help-contact" style="">
                            <h3>Help & Contact</h3>
                            <p>Need help? Any feedback?</p>
                            <p><i class="fa fa-envelope-o" style="font-size: 30px;margin-left: 83px;color: green;"></i>
                            </p>
                            <div class="contact-chat" style="display: none">

                                <form name="message" class="chat-form" action="" style="">
                                    <textarea name="usermsg" class="chatbox" type="text" id="usermsg" placeholder="Your question...."/> </textarea>
                                    <button name="submitmsg" type="submit" class="send-message" id="submitmsg">Send</button>
                                </form>


                            </div>
                            <div>
                                <button class="btn-default start-chat">Let's chat?- Online</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        font: 12px arial;
        color: #222;
        text-align: center;
        padding: 35px;
    }

    form, p, span {
        margin: 0;
        padding: 0;
    }

    input {
        font: 12px arial;
    }

    a {
        color: #0000FF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    #wrapper, #loginform {
        margin: 0 auto;
        padding-bottom: 25px;
        background: #EBF4FB;
        width: 504px;
        border: 1px solid #ACD8F0;
    }

    #loginform {
        padding-top: 18px;
    }

    #loginform p {
        margin: 5px;
    }

    .chatbox {
        background: #fff;
        height: 70px;
        width: 50%;
        border: 1px solid #ACD8F0;
        overflow: auto;
    }

    #usermsg {
        width: 55%;
        border: 1px solid #ACD8F0;
    }

    #submitmsg {
        width: 55%;
    }

    #submit {
        width: 60px;
    }

    .error {
        color: #ff0000;
    }

    #menu {
        padding: 12.5px 25px 12.5px 25px;
    }

    .welcome {
        float: left;
    }

    .logout {
        float: right;
    }

    .msgln {
        margin: 0 0 2px 0;
    }
</style>