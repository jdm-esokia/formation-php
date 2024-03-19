<!DOCTYPE html>
<html lang="en">
<head>
    <title>Birthday Invitation</title>
</head>
<body>
    <h1>You are invited TO MY BIRTHDAY!</h1>

    <form action="" method="GET">
        <input type="input" name="name" placeholder="Name">
        <input type="input" name="guests_count" placeholder="Guest Count">
        <input type="input" name="phone_number" placeholder="Phone Number">
        <input type="submit" value="Please Register Me!">
    </form>
    <style>
        input { display: block; width: 200px; padding: 10px; margin: 10px}
        form { margin: auto;}
    </style>

    <?php 
        if($_REQUEST['name']){
            echo "<h2>Thank you for registering, " . $_REQUEST['name'] . "!</h2>";
        }
    ?>
</body>
</html>