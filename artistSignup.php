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
$aname = $_POST['aname'];
$aphone = $_POST['aphone'];
mysqli_query($conn,"INSERT into musiciantracking.artist(artist_name, artist_phone) values('".$aname."', '".$aphone."')");
mysqli_commit($conn);
mysqli_rollback($conn);
$conn->close();
?>
</body>
</html>