<?php
/*
Filename:     LoginController.php
Creator:      Laravel
Create Date:  20171010
Purpose:      Laravel's generated login page.
Log:
20171015:     Removed Bootstrap styling, added JQuery Mobile Styling and elements//AC
*/
?>





<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Omaha Bike Valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href ="{{asset ('/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>

</head>
<body class = "splash">
<div data-role="page" id="login">
    <div data-role="header">
    </div><!-- /header -->


<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">-->
    <div role="main" class="ui-content">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h2>Login</h2>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">USERNAME</label>
            <input type="email" name="email" id="email" value="" />
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <!--  </div>-->

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">PASSWORD</label>
            <input type="text" name="password" id="password" class="login-field login-field-password" />
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <p><a href="{{url('/register')}}">NEED TO REGISTER?</a></p>

            <a href="{{url('/volunteerWelcome')}}" class="ui-btn ui-corner-all">LOGIN</a>
        </form>

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>

</body>
</html>
<!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                -->


                           <!-- <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                        -->

                       <!-- </div>-->

                       <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                       <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>-->

