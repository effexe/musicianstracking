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
$aname = $_POST['aname'];
$sql = "SELECT * from musiciantracking.venue_schedule where artist_name = '".$aname."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Timestamp</th><th>Artist_Name</th><th>Venue_Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["timestamp"]."</td><td>".$row["artist_name"]."</td><td>".$row["venue_name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>