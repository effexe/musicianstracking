<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300, 400" rel="stylesheet">
<title> Users Queries Page </title>
<style>
* {
	font-family: 'Roboto';
	margin: 0;
  padding: 0;
}

html {
  font-family: 'Roboto', sans-serif;
  background-image: url("user.jpg");
}

.header h1 {
  font-size: 300%;
  margin-bottom: 20px;
}

.container {
  margin: 3% 10%;
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

input[name="uname"], input[name="uid"] {
  background-color: white;
  background-image: url("uname_id.png");
  background-position: 6px 7px;
  background-repeat: no-repeat;
  background-size: 25px 25px;
}
input[name="location"] {
  background-color: white;
  background-image: url("location.png");
  background-position: 6px 7px;
  background-repeat: no-repeat;
  background-size: 25px 25px;
}
input[name="aname"], input[name="aid"]{
  background-color: white;
  background-image: url("aname_id.png");
  background-position: 6px 7px;
  background-repeat: no-repeat;
  background-size: 25px 25px;
}

</style>
</head>
<body>
<div class="container"> 
  <div class="sql_form">
    <div class="header">
      <h1> What would you like to do? </h1>
    </div>

      <h2>I want to sign up. </h2>
      <form action="userSignup.php" method="post">
      Username: <input type="text" value="<?php echo $uname?>" name="uname" /> 
      Location: <input type="text" value="<?php echo $location?>" name="location" />
      <input type="submit" name="send" value="Submit" id="button-blue"/>
      </form>
      <h3>__________________________________________________________________________________________</h3> </br>
      <h2>I want to find the artists that I follow. </h2>
      <form action="userFollows.php" method="post">
      Username: <input type="text" value="<?php echo $uname?>" name="uname" />
      <input type="submit" name="send" value="Submit" id="button-blue"/>
      </form>
      <h3>__________________________________________________________________________________________</h3> </br>
      <h2>I want to find the venue that I attended. </h2>
      <form action="userAttends.php" method="post">
      Username: <input type="text" value="<?php echo $uname?>" name="uname" />
      <input type="submit" name="send" value="Submit" id="button-blue"/>
      </form>
      <h3>_________________________________________________________________________________________</h3> </br>
      <h2>I want to follow an artist.</h2>
      <form action="userFollowAction.php" method="post">
      User_ID: <input type="text" value="<?php echo $uid?>" name="uid" /> 
      Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
      <input type="submit" name="send" value="Submit" id="button-blue"/>
      </form>
      <h3>__________________________________________________________________________________________</h3> </br>
      <h2>I want to look up an artists schedule. </h2>
      <form action="userLookupArtistSchedule.php" method="post">
      Artist_name: <input type="text" value="<?php echo $aname?>" name="aname" />
      <input type="submit" name="send" value="Submit" id="button-blue"/>
      </form>
  </div>
</div>
</body>
</html>