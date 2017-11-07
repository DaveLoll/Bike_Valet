<?php
/*
   Filename:     splash.blade.php
   Creator:      Dave Loll
   Create Date:  20171019
   Purpose:      Splash page for navigation of the app.
   Log:
                 20171019:    Initial file creation.//DL
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href = {{asset('/css/style.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <title>Splash</title>
</head>

<body>
    <a id="nav-toggle" href="#">&#9776;</a>
    <h2 style="text-align: center;">
        <?php
        $ufname = DB::table('User')->where('User_ID', '2')->value('User_First_Name');
        ?>
        {{$ufname}} is the valet for
        <br>
        <?php
        $ename = DB::table('Event')->where('Event_Status', 'Started')->value('Event_Name');
        ?>
        {{$ename}}
    </h2>

    <h3 style="float: left; margin-left: 320px;">
        The image <br>
        of the <br>
        bikes <br>
        checked in<br>
        goes here <br>
    </h3>

    <h3 style="float: right; margin-right: 320px;">
    <?php
        $estime = DB::table('Event')->where('Event_Status', 'Started')->value('Event_Start_Time');
    ?>
    {{$estime}} -
    <?php
        $eetime = DB::table('Event')->where('Event_Status', 'Started')->value('Event_Stop_Time');
    ?>
    {{$eetime}}
    <br>
    <br>
    Remaining Time: <br>
    I'm not<br>
    doing this<br>
    right now<br>
    </h3>

    <div>
        <a href="###"><button type="button">Check In</button></a>
    </div>
    <div>
        <a href="###"><button type="button">Check Out</button></a>
    </div>
</body>
</html>

