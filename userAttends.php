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
$uname = $_POST['uname'];
$sql = "SELECT u.user_name, venue_name, v.location from musiciantracking.user u, musiciantracking.attends a, musiciantracking.venue v WHERE a.venue_id = v.venue_id and u.user_id = a.user_id and u.user_name = '".$uname."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>User_Name</th><th>Venue_Name</th><th>Venue_Location</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["venue_name"]."</td><td>".$row["location"]."</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>