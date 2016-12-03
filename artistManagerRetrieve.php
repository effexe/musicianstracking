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
$sql = "SELECT artist_name, manager_name, manager_phone from musiciantracking.artist natural join musiciantracking.manages natural join musiciantracking.manager where artist_ID = '".$aid."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Artist_Name</th><th>Manager_Name</th><th>Manager_Phone</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["artist_name"]."</td><td>".$row["manager_name"]."</td><td>".$row["manager_phone"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>