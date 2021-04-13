<html>
<?php
include_once("connection.php");
session_start();
?>
<head>
    <title>Log In Form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="logInForm.css">
    


</head>

<body>
    <div class="box">
        <form method="POST" action="loginProcess.php">
            <h1>Log In</h1>

            <input type="text" id="fname" name="email" placeholder="Email" required>
            <input type="password" id="pwd" name="password" placeholder="Password" required>
            <button class="btn1" name="login">LogIn</button>


        </form>

    </div>


</body>

</html>