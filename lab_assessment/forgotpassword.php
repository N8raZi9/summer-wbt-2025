<?php
$email = "";
$email_err = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $email = trim($_POST["email"]);
        echo "<p style='color: green;'>Password reset link sent!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
                <legend>FORGOT PASSWORD</legend>
                Enter Email: <input type="email" name="email" value="<?php echo $email; ?>" style="width: 100%;"><br>
                <p style="color: red;"><?php echo $email_err; ?></p>   
                <hr>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <hr>
        <div style="text-align: center; margin-top: 20px;">
            <h6>Copyright © 2017</h6>
        </div>
    </div>
</body>
</html>