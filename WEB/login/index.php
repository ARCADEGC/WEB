<?php
    include "conection.php"

    $query = "INSERT INTO User(Password, Email) VALUES ('$Email', '$Password')";

    $result = mysqli_query($conn, $query);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Key Generator</title>
</head>
<body>

    <div class="box">
        <h1>KEY GENERATOR</h1>
        
        <br>

        <form action="key.html" method="POST">
            <p>EMAIL</p>
                <br>
                <input type="email" name="Email" placeholder="EMAIL">
                <br> <br>

            <p>PASSWORD</p>
                <br>

                <input class="none" type="password" name="Password" placeholder="PASSWORD">
                
                <br> <br> <br>

                <input type="Submit" value="SHOW" class="button">
        </form>

    </div>

</body>
</html>

