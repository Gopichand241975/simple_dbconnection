<?php
include 'db_connect.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Database Display</title>
    <style>
        body {font-family: Arial, sans-serif; background-color: #eef2f3; margin: 40px;}
        h2 {color: #333;}
        table {border-collapse: collapse; width: 60%; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        th, td {padding: 10px 15px; border: 1px solid #ccc; text-align: left;}
        th {background-color: #f5f5f5;}
    </style>
</head>
<body>
    <h2>List of Users</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No users found in the database.</p>";
    }
    $conn->close();
    ?>
</body>
</html>
