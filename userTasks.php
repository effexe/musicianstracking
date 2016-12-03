<html>
<body>
<h1>Hello user! You can sign up here!</h1>
<form action="userSignup.php" method="post">
Username: <input type="text" value="<?php echo $uname?>" name="uname" />
Location: <input type="text" value="<?php echo $location?>" name="location" />
<input type="submit" />
</form>
</form>
<h1>Hello user! You can follow an artist here!</h1>
<form action="userFollowAction.php" method="post">
User_ID: <input type="text" value="<?php echo $uid?>" name="uid" />
Artist_ID: <input type="text" value="<?php echo $aid?>" name="aid" />
<input type="submit" />
</form>
<h1>Hello user! You can check which users follow which artists! Just input the user name you want to look up!</h1>
<form action="userFollows.php" method="post">
Username: <input type="text" value="<?php echo $uname?>" name="uname" />
<input type="submit" />
</form>
<h1>Hello user! You can check all of the venues a user attended</h1>
<form action="userAttends.php" method="post">
Username: <input type="text" value="<?php echo $uname?>" name="uname" />
<input type="submit" />
</form>
</form>
<h1>Hello user! You can lookup an artist's schedule</h1>
<form action="userLookupArtistSchedule.php" method="post">
Artist name: <input type="text" value="<?php echo $aname?>" name="aname" />
<input type="submit" />
</form>
</body>
</html>