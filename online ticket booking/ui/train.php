
<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 50px;
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0.2,0,0,0.5);
			border-radius: 25px;
		}
		html { 
		  background: url(img/bg1.jpg) no-repeat center center fixed; 
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
</head>
<body>
	<?php
		include ('header.php');
	?>
	<div id="booktkt">
	<h1 align="center" id="journeytext">Choose your journey</h1><br/><br/>
	<form method="post" name="journeyform" onsubmit="return validate()">
		<select id="trains" name="trains" required>
			<option selected disabled>Select trains here</option>
			<option value="abc" >abc Express - abc to edf</option>
			<option value="xyz" >xyz Express - nnm to ghj</option>
			<option value="gr">gr Express - CST to khg</option>
			<option value="edf" >edf Rath - edf to ght</option>
			<option value="ex" >ex Express - gh to ex</option>
		</select>
		<br/><br/>
<label h3 aligh ="center" color ="white" for="start">date</label>
<input type="date" id="start" name="trip-start"
       value="2022-04-22"
       min="2022-04-20" max="2022-12-31">
<br/><br/>


		<input type="submit" name="submit" id="submit" class="button" />
	</form>
	</div>
	</body>
	</html>