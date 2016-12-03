<html>
<body>
<h1>Hello venue! You can perform update your schedule here!</h1>
Update a venue's schedule here:
<form action="task1.php" method="post">
Timestamp: <input type="text" value="<?php echo $time?>" name="time" />
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
Venue_ID: <input type="text" value="<?php echo $vid?>" name="vid" />
<input type="submit" />
</form>
</body>
</html>