
<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<link rel="stylesheet" href="aa.css" type="text/css">
	<style type="text/css">
li {
		font-family: sans-serif;
		font-size:18px;
	}
		#booktkt	{
			margin:auto;
			margin-top: 50px;
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
			border-radius: 25px;
		}
		html { 
		  background: url(img/jj.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			margin-left: 90px;
			font-size: 15px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 40px;
			margin-top: 30px
		}
	</style>
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Please select your train");
				trains.focus();
				return false;		
			}
		}
	</script>
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
</head>
<body>
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
                                    <div class="dates">
                                              <input class="dates" type="radio" name="trip" id="onewway" value="1">
                                              <label h1 aligh="lef" " for="onewway">
                                                One-way
                                              </label>
                                         
                                        
                                              <input class ="dates" type="radio" name="trip" id="rtrip" value="2" ) 
                                              <label h1 aligh="right" for="rtrip">
                                               Round Trip
                                              </label>
                                            </div><br>
<br>
                                        
<label h2 aligh ="left" for="start">departure date</label>
<input type="date" id="start" name="trip-start"
       value="2022-04-22"
       min="2022-04-20" max="2022-12-31">
<label h2 aligh ="right" for="start">return date</label>
<input type="date" id="start" name="trip-start"
       value="2022-04-22"
       min="2022-04-20" max="2022-12-31">

<br>
<br>
<br>
<div class="place">
<label class="place" for="from">From</label>
<input type="text" id="from" name="fname">
<label class="place" for="to">to</label>
<input type="text" id="to" name="tname">
</div>

<br>
<br>
<br>

		<input type="submit" name="submit" id="submit" class="button" />
	</form>
	</div>
	</body>
	</html>