<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        table {
            margin: 0 auto;
        }
        img {
            width: 200px;
            height: 200px;
        }
        form {
            margin-top: 20px;
        }
        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f3f3f3;
            cursor: pointer;
        }
        button:hover {
            background-color: #e9e9e9;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <?php 
    //display all invitations
    include '../mysql_connection/index.php';
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