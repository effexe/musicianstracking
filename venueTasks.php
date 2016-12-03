<html>
<body>
<h1>Hello venue! You can perform update your schedule here!</h1>
Add an artist to your schedule:
<form action="venueUpdate.php" method="post">
Timestamp: <input type="text" value="<?php echo $time?>" name="time" />
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
Venue_ID: <input type="text" value="<?php echo $vid?>" name="vid" />
<input type="submit"/>
</form>
</body>
</html>