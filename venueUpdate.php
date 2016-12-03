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
$time = $_POST['time'];
$aid = $_POST['aid'];
$vid = $_POST['vid'];
$sql = "INSERT into musiciantracking.performs(artist_ID, venue_ID, timestamp) values('".$aid."', '".$vid."','".$time."')";
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