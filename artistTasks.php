<html>
<body>
<h1>Hello artist! You can add yourself to our database!</h1>
<form action="artistSignup.php" method="post">
Artist Name: <input type="text" value="<?php echo $aname?>" name="aname" />
Artist Phone: <input type="text" value="<?php echo $aphone?>" name="aphone" />
<input type="submit"/>
</form>
<h1>Hello artist! You can add where you are performing here!</h1>
<form action="artistUpdate.php" method="post">
Timestamp: <input type="text" value="<?php echo $time?>" name="time" />
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
Venue_ID: <input type="text" value="<?php echo $vid?>" name="vid" />
<input type="submit"/>
</form>
<h1>Hello artist! You can update your manager here!</h1>
<form action="artistManagerUpdate.php" method="post">
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
Manager_ID: <input type="text" value="<?php echo $mid?>" name="mid" />
<input type="submit"/>
</form>
<h1>Hello artist! You can retrieve a list of your managers here!</h1>
<form action="artistManagerRetrieve.php" method="post">
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
<input type="submit"/>
</form>
</body>
</html>