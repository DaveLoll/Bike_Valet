<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="open-bike-valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href ="{{asset ('/css/style.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>





</head>
<body>

<div data-role="page" id="volunteerWelcome">
    <div data-role="header">

    </div><!-- /header -->

    <div role="main" class="ui-content">
        <h2>Welcome and Thanks for volunteering to Valet.</h2>


    </div><!-- /content -->

    <div data-role="footer">
        <a href="{{url('/chooseEvent')}}" class="ui-btn ui-corner-all" id="start">JOIN EVENT</a>
        <h6><a href="{{url('/newVolunteer')}}">Create New Valet</a></h6>


    </div><!-- /footer -->
</div>

</body>
</html>
