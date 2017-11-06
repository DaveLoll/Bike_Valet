<?
/*
Filename:     RegisterController.php
Creator:      Laravel
Create Date:  20171018
Purpose:      Content page for e-mail.
Log:
20171014:    Created basic e-mail message and instructions for Login to the app.//AC
             Signed up for Mailtrap to test sending e-mail

20171019     Added variable for $password, a randomly generated string.

*/
?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>Thank you for Registering with us {{$user->firstName}}</h1>

<p>In order to finish with the registration process, please follow the directions in this e-mail.</p>

<h3>Follow this link:"{{URL ('open-bike-valet/auth/password/reset')}}"</h3>
<p>Enter your Username (The E-mail you used to Register)</p>
<p>Enter the following Password: {{$password}}</p>
<p>You will then be prompted to reset the Password to your own unique Password.</p>


</body>
</html>