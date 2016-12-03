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
$uid = $_POST['uid'];
$aid = $_POST['aid'];
$sql = "INSERT into musiciantracking.follows(user_ID, artist_ID) values('".$uid."', '".$aid."')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>success";
} else {
    echo "<br>success";
}
$conn->close();
?>
</body>
</html>