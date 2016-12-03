<html>
<body>
<h1>Hello venue! You can add yourself to our database!</h1>
<form action="venueSignup.php" method="post">
Venue Name: <input type="text" value="<?php echo $vname?>" name="vname" />
Venue Phone: <input type="text" value="<?php echo $vphone?>" name="vphone" />
Location: <input type="text" value="<?php echo $location?>" name="location" />
<input type="submit"/>
</form>
<h1>Hello venue! You can add an artist to your schedule here!</h1>
<form action="venueUpdate.php" method="post">
Timestamp: <input type="text" value="<?php echo $time?>" name="time" />
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
Venue_ID: <input type="text" value="<?php echo $vid?>" name="vid" />
<input type="submit"/>
</form>
</body>
</html>