<HTML>
<HEAD>
<TITLE>online ticket booking</TITLE>
<link rel="stylesheet" href="aa.css" type="text/css">

<style type="text/css">
li {
		font-family: sans-serif;
		font-size:18px;
	}
@import url(style.css);
#logo	{ 
	border-radius: 25px;
    border: 1px solid blue; 
    width: 100px;
    height: 100px; 
}
*	{
	color: white;
}
html { 
  background: url(img/bg3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:1400px;
		height: 900px;
		margin: 0 auto;
		margin-top: 00px;
		color:black;
		border-radius: 00px;
  		padding-top: 00px;
    	
    	background-color: rgba(0,0,0.7,0.3);
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
</HEAD>
<BODY>
<div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="flight.php">flight</A></li>
            <li><a href="train.php">train</a></li>
            <li><A HREF="register.php">Login/Register</A></li>
            </ul>
          </div>
        </div>
      </div>
<div id="main"><div id="logo">
<A HREF="index.php">
<IMG SRC="img/logo.jpg" alt="Home" id="logo" width="150" height="150"></IMG>
</A></div>
<h1 align="center">Welcome! Plan ahead with us</h1><br/><br/><br/>
<h2 align="center">Have a safe journey with us</h2>
<br/><br/><br/>


<h3 align="center"><a href="register.php">sign up</a></h3>';

</div>
</BODY>
</HTML>