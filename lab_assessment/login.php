<?php
$username = $password = "";
$username_err = $password_err = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }
 
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter password.";
    } else {
        $password = trim($_POST["password"]);
    }
 
    if (empty($username_err) && empty($password_err)) {
        echo "<p style='color: green;'>Login successful!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center;">
    <div style="width: 80%; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">
        <div style="text-align: left;">
            <img src="logo.png" alt="XCompany Logo" style="height: 24px; vertical-align: middle;">
            <div style="float: right;">
                <a href="home.php" style="color: purple;">Home</a> |
                <a href="login.php" style="color: purple;">Login</a> |
                <a href="registaration.php" style="color: purple;">Registration</a>
            </div>
        </div>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="width: 70%; margin: 0 auto; text-align: left;">
            <fieldset>
                <legend>LOGIN</legend>
                User Name: <input type="text" name="username" value="<?php echo $username; ?>" style="width: 100%;"><br>
                <p style="color: red;"><?php echo $username_err; ?></p>
                Password: <input type="password" name="password" style="width: 100%;"><br>
                <p style="color: red;"><?php echo $password_err; ?></p>
                <hr>
                <input type="checkbox" name="remember"> Remember Me<br><br>
                <input type="submit" value="Submit">
                <a href="forgotpassword.php" style="color: blue;">Forgot Password?</a>
            </fieldset>
        </form>
        <hr>
        <div style="text-align: center; margin-top: 20px;">
            <h6>Copyright © 2017</h6>
        </div>
    </div>
</body>
</html>