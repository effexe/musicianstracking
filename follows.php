<html>
<body>
<h1>Hello user! You can check which users follow which artists! Just input the user name you want to look up!</h1>
<form action="followsservice.php" method="post">
Username: <input type="text" value="<?php echo $uname?>" name="uname" />
<input type="submit" />
</form>
</body>
</html>