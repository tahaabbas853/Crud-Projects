<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "css/style.php" ?>
    <?php include "links/links.php" ?>
</head>

<body>

    <?php

    include "dbcon.php";

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    
    // for password encryption through php password   
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $confirm_pass = password_hash($confirm_password, PASSWORD_BCRYPT);

    // for email count, that it should not be exists more than once 
    $emailquery = "Select * from createAccount where email = '$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0) {
        ?>
        <script>
            alert("Email already exists!")
        </script>
        <?php
    } else {
        if ($password === $confirm_password) {
            $insertquery = "insert into createAccount(username,email,number,password,confirm_password) values('$username','$email','$number','$pass','$confirm_pass')";
            $iquery = mysqli_query($conn, $insertquery);

            if ($iquery) {
            ?>
            <script>
                alert("Insert Successfully!")
            </script>
            <?php

            } else {
            ?>
            <script>
                alert("Insert not Successfully!")
            </script>
            <?php

            }
        } else {
            ?>
            <script>
                alert("Passwords do not match!")
            </script>
            <?php

        }
    }
}
    ?>

    <h2>Responsive Social Login Form</h2>
    <p>Resize the browser window to see the responsive effect. When the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other.</p>

    <div class="container">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST">
            <div class="row">
                <h2 style="text-align:center">Create Account with Social Media or Manually</h2>
                <div class="vl">
                    <span class="vl-innertext">or</span>
                </div>

                <div class="col">
                    <a href="#" class="fb btn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    <a href="#" class="twitter btn">
                        <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                    </a>
                    <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                        </i> Login with Google+
                    </a>
                </div>

                <div class="col">
                    <div class="hide-md-lg">
                        <p>Or sign in manually:</p>
                    </div>

                    <input type="text" name="username" placeholder="Username" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="number" placeholder="Phone Number" required>
                    <input type="password" name="password" placeholder="Create Password" required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <input type="submit" name="submit" value="submit">
                </div>

            </div>
        </form>
    </div>

    <div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="#" style="color:white" class="btn">Login</a>
            </div>
            <div class="col">
                <a href="#" style="color:white" class="btn">Forgot password?</a>
            </div>
        </div>
    </div>

</body>

</html>