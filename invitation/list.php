<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List</title>
</head>
<body>
    <?php 
    //display all invitations
    include '../mysql_connection.php';
    $sql = "SELECT * FROM birthday_invitations";
    $result = $conn->query($sql);

    echo "<table>";
    echo "<tr><th>Table Number</th><th>Name</th><th>Guests</th><th>Phone</th></tr>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["guests_count"]. "</td><td>" . $row["phone_number"]. "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</body>
</html>