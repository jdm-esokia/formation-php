<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombola!</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
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
    <h1> Welcome to Tombola Ticket Checker!</h1>
    <img src="tombola.png"/>
    <h3>Please enter your Tombola Ticket Number</h3>
    <form action="" method="GET">
        <input type="text" name="ticket_number" placeholder="000">
        <button type="submit">Verify My Ticket</button>
    </form>


    <?php 
    //Now we build the PHP logic
    $winningNumbers = [ "010", "020", "433", "040", "151"  ];
        if(isset($_GET['ticket_number'])){
            
            $ticket = $_GET['ticket_number'];

            if(in_array($ticket, $winningNumbers)){
                echo "<h1 style='color:blue'>Congratulations! You have won the Tombola!</h1>";
            } else {
                echo "<h2>Sorry, you have not won the Tombola!</h3>";
            }

        }
    ?>
    
</body>
</html>

