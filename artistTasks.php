<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300, 400" rel="stylesheet">
<title> Artists Queries Page </title>
<style>
* {
	font-family: 'Roboto';
	margin: 0;
  padding: 0;
}

html {
  font-family: 'Roboto', sans-serif;
  background-image: url("artist.jpg");
}

.header h1 {
  font-size: 300%;
  margin-bottom: 20px;
}

.container {
  margin: 5% 10%;
  border-radius: 5px;
  background-color:rgba(180,180,180,0.77);
  padding: 20px;
  text-align: center;
}

input {
  font-size: 15px;
  padding: 10px 15px;
  padding-left: 35px;
  margin-bottom: 5px;
  margin-right: 3px;
  background-color: white;
  background-position: 6px 7px;
  background-repeat: no-repeat;
  background-size: 25px 25px;
}

/*send button animations and styles*/
#button-blue{
  border: none;
  display: inline-block;
  cursor:pointer;
  background-color: white;
  color: black;
  font-size:15px;
  padding: 11.5px;
  padding-top: 11.4px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  margin-top: 5px;
  font-weight:700;
  margin-bottom: 20px;
  border: 2px solid #008CBA;
}

#button-blue:hover{
    background-color: #008CBA;
    color: white;
}

input[name="vname"], input[name="vid"] {
  background-image: url("vname_id.png");
}
input[name="vphone"], [name="aphone"] {
  background-image: url("vphone.png");
}
input[name="location"] {
  background-image: url("location.png");
}
input[name="aid"], [name="aname"]{
  background-image: url("aname_id.png");
}
input[name="time"]{
  background-image: url("time.png");
}
input[name="mid"]{
  background-image: url("uname_id.png");
}

</style>
</head>
<body>
<div class="container"> 
  <div class="sql_form">
    <div class="header">
      <h1> What would you like to do, artist? </h1>
    </div>

	<h2>I want to sign up. </h2>
	<form action="artistSignup.php" method="post">
	Artist Name: <input type="text" value="<?php echo $aname?>" name="aname" />
	Artist Phone: <input type="text" value="<?php echo $aphone?>" name="aphone" />
	<input type="submit" name="send" value="Submit" id="button-blue"/>
	</form>

	<h3>__________________________________________________________________________________________________________________</h3> </br>
	<h2>I want to add myself to a venue's schedule. </h2>
	<form action="artistUpdate.php" method="post">
	Timestamp: <input type="text" value="<?php echo $time?>" name="time" />
	Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
	Venue_ID: <input type="text" value="<?php echo $vid?>" name="vid" />
	<input type="submit" name="send" value="Submit" id="button-blue"/>
	</form>

	<h3>__________________________________________________________________________________________________________________</h3> </br>
	<h2>I want to update my manager. </h2>
	<form action="artistManagerUpdate.php" method="post">
	Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
	Manager_ID: <input type="text" value="<?php echo $mid?>" name="mid" />
	<input type="submit" name="send" value="Submit" id="button-blue"/>
	</form>

	<h3>__________________________________________________________________________________________________________________</h3> </br>
	<h2>I want a list of my managers. </h2>
	<form action="artistManagerRetrieve.php" method="post">
	Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
	<input type="submit" name="send" value="Submit" id="button-blue"/>
	</form>
  </div>
</div>
</body>
</html>