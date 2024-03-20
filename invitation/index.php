<!DOCTYPE html>
<html lang="en">
<head>
    <title>Birthday Invitation</title>
</head>
<body>
    <h1>Birthday Invitation</h1>

    <form action="" method="POST">
        <input type="input" name="name" placeholder="Name">
        <input type="input" name="guests_count" placeholder="Guest Count">
        <input type="input" name="phone_number" placeholder="Phone Number">
        <input type="submit" value="Please Register Me!">
    </form>
    <style>
        * { font-family: Verdana, Geneva, Tahoma, sans-serif;}
        input { display: block; width: 200px; padding: 10px; margin: 10px; border: 1px solid #ccc}
        form { margin: auto;}
    </style>

    <?php 
        if($_REQUEST['name']){

            //Collect all variables posted by user
            $name = $_REQUEST['name'];
            $guests_count = $_REQUEST['guests_count'];
            $phone_number = $_REQUEST['phone_number'];

            insertIntoDatabase($name, $guests_count, $phone_number);

        }

        function insertIntoDatabase($name, $guests_count, $phone_number){
            include '../mysql_connection.php';
            $sql = "INSERT INTO birthday_invitations (name, guests_count, phone_number) VALUES ('$name', '$guests_count', '$phone_number')";

            if ($conn->query($sql) === TRUE) {
                //get last entry id
                $last_id = $conn->insert_id;

                echo "<h2>Thank you for registering, " . $_REQUEST['name'] . "!</h2>";
                echo "<h2>Your Table Number is </h2> <h1>#$last_id<h1>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
</body>
</html>