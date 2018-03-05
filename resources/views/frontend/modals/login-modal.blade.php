<div class="modal" id="login-modal">
    <div class="modal-dialog user-login-modal">
        <div class="modal-content">
            <div class="card card-default">
                <div class="card-header">Login</div>
                <div class="row">
                    <div class="col-md-4 social-login">
                        <h4>
                            Continue with:
                        </h4>
                        <ul style="padding: 0px">
                            <a class="fb-login-btn" href="{{route('fb.login')}}">
                                <li><i class="fa fa-facebook"></i>Facebook</li>
                            </a>
                            <a class="ig-login-btn" href="{{route('ig.login')}}">
                                <li class=""><i class="fa fa-instagram instagram"></i>Instagram
                                </li>
                            </a>
                            <a class="email-login-btn" href="#" style="text-align:  inherit">
                                <li class="" ><i style="margin-left: 31px;margin-right: 8px;" class="fa fa-envelope-o"></i>Email
                                </li>
                            </a>
                        </ul>

                    </div>
                    <div class="col-md-4 social-login-email" style="display: none; margin-top: 20px">
                        <h5>Join now — it's free</h5>
                        <form method="POST" action="{{ route('register') }}" style="margin-left: 35px">
                            {{ csrf_field() }}

                            <div class="form-group row login-form">
                                <div class="">
                                    <label for="email" class="col-form-label text-md-right">E-Mail Address</label>
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row login-form">

                                <div class="">
                                    <label for="password" class=" col-form-label text-md-right">Password</label>
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row login-form">
                                <div class="">
                                    <button type="submit" class="btn-primary">
                                        Join
                                    </button>
                                    <button type="button" class="btn-default cansel-email-login">
                                        Cansel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group row login-form">
                                    <div class="">
                                        <label for="email" class="col-form-label text-md-right">E-Mail Address</label>
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email"
                                               value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row login-form">

                                    <div class="">
                                        <label for="password" class=" col-form-label text-md-right">Password</label>
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row login-form">
                                    <div class="">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row login-form">
                                    <div class="">
                                        <button type="submit" class="btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row login-form">
                                    <div class="">
                                        <a class="btn btn-link" style="font-size:12px; padding:0px"
                                           href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>