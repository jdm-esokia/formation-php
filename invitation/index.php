<!DOCTYPE html>
<html lang="en">

<head>
    <title>Birthday Invitation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');

        body {
            text-align: center;
            font-family: 'Handlee', cursive;
            background: rgb(73, 136, 8);
            background: linear-gradient(101deg, rgba(73, 136, 8, 1) 0%, rgba(0, 212, 255, 1) 100%);
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

        h1 { 
            font-size: 50px;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
        .message {
            background-color: white;
            border-radius: 10px;
            display: inline-block;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>You are INVITED!</h1>
    <p></p>

    <div class="message">
        Dear Mr/Madam, <br>
        <br>
        You are cordially invited to the birthday party. <br>
        Please enter your name, accompanying guest count and your phone number <br>
        Looking forward to celebrating with you. <br>
    </div>

    <form action="" method="POST">
        <input type="input" name="name" placeholder="Name">
        <input type="input" name="guests_count" placeholder="Guest Count">
        <input type="input" name="phone_number" placeholder="Phone Number">
        <input type="submit" value="Please Register Me!">
    </form>


    <?php
    if ($_REQUEST['name']) {

        //Collect all variables posted by user
        $name = $_REQUEST['name'];
        $guests_count = $_REQUEST['guests_count'];
        $phone_number = $_REQUEST['phone_number'];

        insertIntoDatabase($name, $guests_count, $phone_number);
    }

    function insertIntoDatabase($name, $guests_count, $phone_number)
    {
        include '../mysql_connection/index.php';
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