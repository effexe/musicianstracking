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
$vname = $_POST['vname'];
$vphone = $_POST['vphone'];
$location = $_POST['location'];
$sql = "INSERT into musiciantracking.venue(venue_name, venue_phone, location) values('".$vname."', '".$vphone."','".$location."')";
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