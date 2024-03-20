<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombola!</title>
</head>
<body>
    <h1>Please enter your Tombola Ticket Number!</h1>
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
                echo "<h2>Congratulations! You have won the Tombola!</h2>";
            } else {
                echo "<h2>Sorry, you have not won the Tombola!</h3>";
            }

        }
    ?>
    
</body>
</html>

