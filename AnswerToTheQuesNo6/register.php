<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css" type="text/css">

</head>

<body>

    <div class="registration">
        <div class="form-conteniar">
            <form class="box" action="insert.php" method="post">
                <h2>Registration</h2>


                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="First Name" class="name" id="f_name" name="f_name">
                </div>


                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="Last Name" class="name" id="l_name" name="l_name">
                </div>



                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" required class="text-name" id="email" name="email">
                </div>


                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" class="text-name" id="password" name="password">
                </div>


                <div class="input-name">
                    <i class="fa fa-user lock"></i>

                    <input type="text" placeholder="Gender" class="text-name" id="gender" name="gender">
                </div>

                <div class="input-name">
                    <input class="button" type="submit" value="Registration">
                </div>


            </form>

        </div>
    </div>



</body>

</html>