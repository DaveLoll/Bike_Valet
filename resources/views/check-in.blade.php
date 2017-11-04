{{--/*--}}
{{--Filename:     check-in.blade.php--}}
{{--Creator:      Kyle Fisher--}}
{{--Create Date:  20171016--}}
{{--Purpose:      A testing page for checking in bikers.--}}
{{--Log:--}}
{{--20171016:     Initial file creation.//KF--}}
{{--*/--}}
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Omaha Bike Valet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href = {{asset('/css/style.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log('javascript sucks');
            $(document).on('click', '#singleFormButton', function() {
                console.log('happening');
                $.ajax({
                    type: 'POST',
                    url: '/bikerInfo',
//                    processData: false,
//                    contentType: false,
//                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {number:$('#phoneNumber2').val()},

                    success: function (data) {
                        var biker = JSON.parse(data);
                        console.log(biker);
                        $('#firstName').val(biker[0].Biker_First_Name);
                        $('#lastName').val(biker[0].Biker_Last_Name);
                        $('#phoneNumber').val(biker[0].Biker_Phone_Number);
                        $('#zipcode').val(biker[0].Biker_Zip);
                        $('#email').val(biker[0].Biker_Email);
                        $('#tag').val($('#tag2').val());

                    },
                    error: function (data) {

                    }
                });
                return true;
            });
        });
    </script>
</head>
<body>
<div data-role="page" id="login">
    <div data-role="header">
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <form>
            <a href="#checkIn" class="a ui-btn ui-corner-all">CHECK IN</a>
        </form>

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="volunteerHours">
    <div data-role="header">
        <a href="#menu" data-icon="bars"></a>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <h3>Thanks for volunteering James.</h3>
        <ol data-role = "listview">
            <li>YOU'VE VOLUNTEERED</li>
            <li>10 Times</li>
            <li>TOTAL</li>
            <lI>22 Hours</lI>
            <li>22 minutes</li>
        </ol>

    </div><!-- /content -->

    <div data-role="footer">
        <a href='#' class="ui-btn ui-corner-all" id="start">START EVENT</a>
        <h6><a href="#chooseEvent">Create New Event</a></h6>


    </div><!-- /footer -->
</div>
<div data-role="page" id="chooseEvent">
    <div data-role="header">
        <a href="#volunteerHours" data-icon = "arrow-l" data-rel = "back"></a>

    </div><!-- /header -->

    <div role="main" class="ui-content">
        <h3>Choose a scheduled event from the available list</h3>
        <div data-role="content">
            <ul data-role="listview" data-filter="true">
                <li data-role="list-divider"> TIME <p class="ui-li-aside">NAME</p></li>
                <li><a href="#startEvent">9:00 AM-2:00 PM<p class="ui-li-aside">Short event name</a></li>
                <li><a href="#">10:00 AM-2:00 PM<p class="ui-li-aside">Medium length event name</a></li>
                <li><a href="#">2:00 PM-4:00 PM<p class="ui-li-aside">Longer length of an event that will break more than one line</a></li>
            </ul>

        </div>
    </div> <!-- /content -->

    <div data-role="footer">

        <h6>Note that events will only show up the day the event is scheduled to start</h6>

    </div><!-- /footer -->
</div>

</div>
<div data-role="page" id="startEvent">
    <div data-role="header">
        <h1>Start Event</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="inventory">
    <div data-role="header">
        <h1>Inventory</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="checkIn">
    <div data-role="header">
        <a href="#menu" data-icon="bars"></a>
        <h1>James is the Valet for</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="bikerStatus">
    <div data-role="header">
        <a data-icon="backArrowIcon" data-rel="back"></a>
        <h1>Biker Status</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="newRegistration">
    <div data-role="header">
        <a data-rel="back" data-icon="cancel"></a>
        <h1>New Registration</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        {{--<form>--}}
            {{--<label for="firstName">First Name</label>--}}
            {{--<input type="text" name="FirstName" id="firstName" value=""  />--}}
            {{--<label for="lastName">Last Name</label>--}}
            {{--<input type="text" name="LastName" id="lastName" value=""  />--}}
            {{--<label for="phoneNumber">Phone Number</label>--}}
            {{--<input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />--}}
            {{--<label for="zipcode">Zipcode</label>--}}
            {{--<input type="number" name="Zipcode" id="zipcode" value=""  />--}}
            {{--<label for="email">Email (optional)</label>--}}
            {{--<input type="email" name="email" id="email" value=""  />--}}
        {{--</form>--}}
    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="newVolunteer">
    <div data-role="header">
        <a data-icon="arrow-l" data-rel="back"></a>
        <h1>Create New Volunteer</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        {{--<form>--}}
            {{--<label for="firstName">First Name</label>--}}
            {{--<input type="text" name="FirstName" id="firstName" value=""  />--}}
            {{--<label for="lastName">Last Name</label>--}}
            {{--<input type="text" name="LastName" id="lastName" value=""  />--}}
            {{--<label for="phoneNumber">Phone Number</label>--}}
            {{--<input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />--}}
            {{--<label for="email">Email (optional)</label>--}}
            {{--<input type="email" name="email" id="email" value=""  />--}}
            {{--<h3>Role</h3>--}}
            {{--<label>--}}
                {{--<input type="radio" name="leadValet" id="radio-choice-0a">Lead Valet</label>--}}
            {{--<label for="radio-choice-0b">Standard Valet</label>--}}
            {{--<input type="radio" name="standardValet" id="radio-choice-0b">--}}
            {{--<input type="button" value="Create">--}}
        {{--</form>--}}
    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="rackTemplate">
    <div data-role="header">
        <a data-icon="arrow-l" data-rel="back"></a>
        <h1>Check In</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content">

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="termsOfUse">
    <div data-role="header">
        <a data-icon="cancel" data-rel="back"></a>
    </div><!-- /header -->

    <div role="main" class="ui-content">
        <p>These are the terms of use. blah blah blah blah blah
            blah blah blah blah blah
            blah blah blah blah blah
            blah blah blah blah blah</p>
        <form>
            <input type="button" value="I Agree">
        </form>
    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div>
<div data-role="page" id="bikerSignIn">
    <div data-role="header">

    </div>
    <div role="main" class="ui-content">

    </div>
    <div data-role="footer"></div>
</div>
<div data-role="page" id="checkIn">
    <div data-role="header">
            <h2>Check In</h2>
    </div>
    <label for="tag">TAG:</label>
    <form action="/bikerInfo" method="POST">
        <input type="text" name="tag" id="tag2" value="" />
        <label id="phoneNumberValue" for="PhoneNumber">Phone Number</label>
        <input type="tel" name="PhoneNumber" id="phoneNumber2" value=""  />
        {{--<button type="submit" data-ajax="false" class="btn btn-primary">Check In</button>--}}
    </form>
    <div role="main" class="ui-content">
        {{--<p><a href="#newBiker">New Biker</a></p>--}}
        {{--<p><a href="#existingBiker">Existing Biker</a></p>--}}
        <p><a href="#singleBiker" id="singleFormButton">Checkin</a></p>
    </div>
    <div data-role="footer"></div>
</div>
{{--<div data-role="page" id="newBiker">--}}
    {{--<form id="NewBikerInfo" action="/bikerEvent" method="POST" data-ajax="false">--}}
        {{--{{ csrf_field() }}--}}
        {{--<label for="firstName">First Name</label>--}}
        {{--<input type="text" name="FirstName" id="firstName" value=""  />--}}
        {{--<label for="lastName">Last Name</label>--}}
        {{--<input type="text" name="LastName" id="lastName" value=""  />--}}
        {{--<label id="phoneNumberValue" for="phoneNumber">Phone Number</label>--}}
        {{--<input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />--}}
        {{--<label for="zipcode">Zipcode</label>--}}
        {{--<input type="number" name="Zipcode" id="zipcode" value=""  />--}}
        {{--<label for="email">Email (optional)</label>--}}
        {{--<input type="email" name="email" id="email" value=""  />--}}
        {{--<label for="tag">TAG:</label>--}}
        {{--<input type="text" name="tag" id="tag" value="" />--}}
        {{--<button type="submit" data-ajax="false" class="btn btn-primary">Check In</button>--}}
    {{--</form>--}}
{{--</div>--}}
{{--<div data-role="page" id="existingBiker">--}}
    {{--<form id="ExistingBikerInfo" action="/ParkedBike" method="POST" data-ajax="false">--}}
        {{--{{ csrf_field() }}--}}
        {{--<label id="phoneNumberValue" for="phoneNumber">Phone Number</label>--}}
        {{--<input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />--}}
        {{--<label for="email">Email (optional)</label>--}}
        {{--<input type="email" name="email" id="email" value=""  />--}}
        {{--<label for="tag">TAG:</label>--}}
        {{--<input type="text" name="tag" id="tag" value="" />--}}
        {{--<button type="submit" data-ajax="false" class="btn btn-primary">Check In</button>--}}
    {{--</form>--}}
{{--</div>--}}
<div data-role="page" id="singleBiker">
    <form id="SingleBikerInfo" action="/bikerEvent" method="POST" data-ajax="false">
        {{ csrf_field() }}
        <label for="firstName">First Name</label>
        <input type="text" name="FirstName" id="firstName" value=""  />
        <label for="lastName">Last Name</label>
        <input type="text" name="LastName" id="lastName" value=""  />
        <label id="phoneNumberValue" for="phoneNumber">Phone Number</label>
        <input type="tel" name="PhoneNumber" id="phoneNumber" value=""  />
        <label for="zipcode">Zipcode</label>
        <input type="text" name="Zipcode" id="zipcode" value=""  />
        <label for="email">Email (optional)</label>
        <input type="email" name="email" id="email" value=""  />
        <label for="tag">TAG:</label>
        <input type="text" name="tag" id="tag" value="" />
        <button type="submit" data-ajax="false" class="btn btn-primary">Check In</button>
    </form>
</div>
<div data-role="panel" id="menu" data-position="left" data-display="overlay">

</div><!-- /panel -->
</body>
</html>