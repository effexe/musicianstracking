<html>
<head>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
</head>
<body>
<?php
include "connection.php";
mysqli_autocommit($conn,FALSE);
$uname = $_POST['uname'];
$location = $_POST['location'];
mysqli_query($conn,"INSERT into musiciantracking.user(user_name, location) values('".$uname."', '".$location."')");
mysqli_commit($conn);
mysqli_rollback($conn);
$conn->close();
?>
</body>
</html>