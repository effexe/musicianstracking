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
$sql = "SELECT user_name, artist_name from musiciantracking.user natural join musiciantracking.follows natural join musiciantracking.artist where user_name = '".$uname."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>User_Name</th><th>Artist_Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["artist_name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>