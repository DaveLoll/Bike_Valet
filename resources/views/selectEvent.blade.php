<?php
/*
   Filename:     selectEvent.blade.php
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

    <title>Select Event</title>
</head>




<div data-role="page" id="chooseEvent">

    <div data-role="header">
       {{--<a id="nav-toggle" href="#">&#9776;</a> --}}
    </div><!-- /header -->



    <div role="main" class="ui-content">

        <h3 style="text-align: center;">Select a scheduled event from the available list:</h3>

        <div data-role="content">

            <ul data-role="listview">

                <li data-role="list-divider">
                    <form method="post" action="">
                    @foreach($events as $event)
                    <?php
                    if ($event->Event_Status == 'Started') {
                      echo '<li>';
                      echo "<input type=\"radio\" name=\"Event_Name\" value=\"\">$event->Event_Date $event->Event_Start_Time - $event->Event_Stop_Time $event->Event_Name</input>";
                      echo '</li>';
                    }
                    ?>
                    @endforeach
                    <input type="submit" name="submit" value="Select Event"><br>
                    </form>
                 </li>
            </ul>
        </div>
    </div> <!-- /content -->

    <div data-role="footer">
        <h6>Note: that events will only show up after the event has been started.</h6>
    </div><!-- /footer -->

</div>

