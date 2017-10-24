<?php
/*
   Filename:     index.php
   Creator:      Generated by Laravel
   Create Date:  20171010
   Purpose:      The application's registration page.
   Log:
                 20171014:     Replaced Bootstrap structure with JQuery Mobile structure from new-volunteer-registration page. //AC
*/
?>
<?php
/*
   Filename:     register.blade.php
   Creator:      Laravel
   Create Date:  20171010
   Purpose:      Laravel's generated registration page
   Log:
                 20171014:     Removed Bootstrap styling, added JQuery Mobile Styling and elements//AC
                 20171024:     Returned the Password fields with random string valuue//AC
*/
?>



<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                -->

                    <!--<form class="form-horizontal"-->
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
<div data-role="page" id="new_volunteer_registration">
    <div data-role="header">
        <a data-icon="arrow-l" data-rel="back"></a>
        <h2>Create New Volunteer</h2>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="ui-field-contain{{ $errors->has('userFirstName') ? ' has-error' : '' }}">

                           <!-- <label for="name" class="col-md-4 control-label">Name</label>
                           <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            -->

                                   <label for="userFirstName">First Name</label>
                                   <input type="text" name="userFirstName" id="userFirstName" value=""  />
                               </div>
                                @if ($errors->has('userFirstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userFirstName') }}</strong>
                                    </span>
                                @endif
                            <!--</div>-->
                        <!--</div>-->
            <div class="ui-field-contain{{ $errors->has('userLastName') ? ' has-error' : '' }}">

            <!-- <label for="name" class="col-md-4 control-label">Name</label>
                           <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            -->

                    <label for="userLastName">Last Name</label>
                    <input type="text" name="userLastName" id="userLastName" value=""  />
                </div>
                @if ($errors->has('userLastName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('userLastName') }}</strong>
                                    </span>
                @endif
            <!--</div>-->

                        <div class="ui-field-contain{{ $errors->has('email') ? ' has-error' : '' }}">
                          <!--  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            -->

                                  <label for="email">Email</label>
                                  <input type="email" name="email" id="email" value=""  />
                              </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <!--</div>-->

                        <div class="ui-field-contain{{ $errors->has('userPhoneNumber') ? ' has-error' : '' }}">

                                <label for="userPhoneNumber">Phone Number</label>
                                <input type="tel" name="userPhoneNumber" id="userPhoneNumber" value=""  />
                            </div>
                                @if ($errors->has('userPhoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif

          <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value = {{$password}} required>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value = {{$password}}
                                       required>
                            </div>
                        </diiv>
            <div class="ui-field-contain{{ $errors->has('userRole') ? ' has-error' : '' }}">
                        <legend>Role:</legend>


                <label> <input type="radio" name="userRole" id="userRole1">Lead Valet</label>
                <label><input type="radio" name="userRole" id="userRole2">Valet</label>

            </div>
            <div class="ui-input-btn ui-btn ui-corner-all">
                Create
            <input type="button" value="Create" >
            </div>
                       <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            <!--</div>-->
                        </div>
                    </form>
               </div>
            </div>
       <!-- </div>
    </div>
</div>-->
</html>

