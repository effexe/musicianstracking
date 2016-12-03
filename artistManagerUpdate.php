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
$aid = $_POST['aid'];
$mid = $_POST['mid'];
$sql = "INSERT into musiciantracking.manages(artist_ID, manager_ID) values('".$aid."', '".$mid."')";
$result = $conn->query($sql);
printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
$conn->close();
?>
</body>
</html>