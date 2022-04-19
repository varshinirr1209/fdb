<HTML>
<HEAD>
<TITLE>Register on Indian Railways</TITLE>
<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<link rel="stylesheet" href="aa.css" type="text/css">
<style type="text/css">
li {
		font-family: sans-serif;
		font-size:18px;
	}
*	{
	color: #222;
}
#register_form	{
	background-color: white;
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue; 
	margin-top: 25px;
}
#nav	{
	color: white;
}
#logintext	{
	margin-top: 10px;
}
#login	{
	margin-top: 10px;
	margin-bottom: 20px;
}
</style>
<script src="script.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
<SCRIPT src="validation.js"></SCRIPT>
</HEAD>
<BODY  background="img/bg2.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
<div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="flight.php">flight</A></li>
            <li><a href="bookticket.php">train</a></li>
            <li><A HREF="register.php">Login/Register</A></li>
            </ul>
          </div>
        </div>
      </div>
<?php include("header.php") ?>
<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Enter your details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Age:</FONT></TD>
<TD><INPUT type="TEXT" name="age" align="center" size="30" maxlength="3" placeholder="Enter age" id="age"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Mobile Number:</FONT></TD>
<TD><INPUT type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TR class="left">
<TD><FONT size="5" color="WHITE">Gender:</FONT></TD>
<TD>&nbsp;&nbsp;
<INPUT type="radio" name="gender" value="Male" align="center" id="gender">Male
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender" value="Female" align="center" id="gender">Female
</TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="login.php">
<P align="CENTER" id="logintext"><FONT size="6" color="white" face="Arial">
Already have an account with us?<BR/></FONT></FONT>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML>