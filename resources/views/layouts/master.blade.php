<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Omaha Bike Valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href = {{asset('/css/style.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{-- disabled ajax --}}
    <script type="text/javascript">
        $(document).bind("mobileinit", function () {
            $.mobile.ajaxEnabled = false;
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>

</head>
<body>
<div data-role="page" id=@yield('id')>
    <div data-role="header">
        @section('header')
        @show
    </div><!-- /header -->

    <div role="main" class="ui-content">
        @section('main')
        @show
    </div><!-- /content -->

    <div data-role="footer">
        @section('footer')
        @show
    </div><!-- /footer -->
</div>
    @section('extra')
    @show
</body>
</html>