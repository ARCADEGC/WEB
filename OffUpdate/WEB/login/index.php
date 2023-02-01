
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



            <p><?php
                include "conection.php";

                if (isset($_POST["Email"]) && isset($_POST["Password"])) {
                    $email = $_POST["Email"];
                    $password = $_POST["Password"];

                    $query = "SELECT KeyCode FROM User WHERE Email = '$email' AND Password = '$password'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $key = $row["KeyCode"];
                        echo "Your KeyCode is: " . $key;
                    } else {
                        $key = substr(md5(rand()), 0, 16);
                        $query = "INSERT INTO User (Password, Email, KeyCode) VALUES ('$password', '$email', '$key')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            echo "Your KeyCode is: " . $key;
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                    }
                }
                ?>
            </p>
        

            
        </form>
    </div>

</body>
</html>

