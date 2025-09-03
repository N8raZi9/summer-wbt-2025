<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="Form.css">

</head>

<body>



    <?php
    $fnameErr = $lnameErr = $addressErr = $codeErr = $phoneErr = $emailErr = $donationErr = "";
    $fname = $lname = $address = $code = $phone = $email = $donation = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "First name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "Last name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $address)) {
                $addressErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["code"])) {
            $codeErr = "Zip code is required";
        } else {
            $code = test_input($_POST["code"]);
            if (!preg_match("/^[0-9]*$/", $code)) {
                $codeErr = "Only numbers are allowed";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]*$/", $phone)) {
                $phoneErr = "Only numbers are allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["donation"])) {
            $donationErr = "Donation is required";
        } else {
            $donation = test_input($_POST["donation"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>



    <h2>Donation Form</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <label>First Name: </label><input type="text" name="fname" value="<?php echo $fname; ?>">
        <span class="error">* <?php echo $fnameErr; ?></span>
        <br> <br>

        <label>Last Name: </label><input type="text" name="lname" value="<?php echo $lname; ?>">
        <span class="error">* <?php echo $lnameErr; ?></span>
        <br> <br>

        <label>Address: </label><input type="txt" name="address" value="<?php echo $address; ?>">
        <span class="error">* <?php echo $addressErr; ?></span>
        <br> <br>

        <label>Zip Code: </label><input type="text" name="code" value="<?php echo $code; ?>">
        <span class="error">* <?php echo $codeErr; ?></span>
        <br> <br>

        <label>Phone: </label><input type="text" name="phone" maxlength="11" value="<?php echo $phone; ?>">
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br> <br>

        <label>Email: </label><input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br> <br>

        <label>Donation Amount: </label>
        <input type="radio" name="donation" <?php if ($donation == "50") echo "checked"; ?>> $50
        <input type="radio" name="donation" <?php if ($donation == "100") echo "checked"; ?>> $100
        <input type="radio" name="donation" <?php if ($donation == "200") echo "checked"; ?>> $200
        <input type="radio" name="donation" <?php if ($donation == "500") echo "checked"; ?>> $500
        <input type="radio" name="donation" <?php if ($donation == "Other") echo "checked"; ?>> Other
        <span class="error">* <?php echo $donationErr; ?></span>
        <br> <br>

        <div class="a">
            <small> (check a button or type in your amount)</small>
            <label for="Other Amount $"><strong>Other Amount $:</strong></label>
            <input type="number" id="Other Amount $">
        </div>

        <div class="b">
            <label for="Recurring Donation"><strong>Recurring Donation</strong> </label>
            <input type="checkbox">
            <small> (I am interested in giving on a regular basis)</small><br>
            <small>(check if yes)</small>

        </div>

        <div class="card">
            <label for="Monthly Credit Card$">Monthly Credit Card$:</label>

            <input type="text" minlength="1" size="4">
            <label for="For">For</label>
            <input type="text" minlength="1" size="4">

            <label for="Months">Months</label>
        </div>
        </h4>

        <h2> Honorarium and Memorial Donation Information</h2>


        <div class="Honorarium">

            <label><strong>I would like to make this donation:</strong></label>


            <input type="radio" name="To Honor" value="To Honor" id="To Honor">
            <label for="To Honor">To Honor</label><br>

            <input type="radio" name="In memory of" value="In memory of" id="Inmemoryof">
            <label for="In memory of">In memory of</label>

            <div class="form-group">

                <label for="Name"> <strong>Name</strong></label>
                <input type="text" id="Name">

            </div>

            <div class="form-group">

                <label for="Acknowledge Donation to"> <strong>Acknowledge Donation to:</strong> </label>
                <input type="text" id="Acknowledge Donation to">

            </div>
            <div class="form-group">

                <label for="Address"><strong>Address</strong></label>
                <input type="text" id="Address">

            </div>

            <div class="form-group">

                <label for="City"> <strong>City</strong></label>
                <input type="text" id="City">

            </div>
            <div class="state">
                <label for="state"> <strong>State:</strong></label>


                <select name="state">
                    <option value="DHAKA" required>Select a state</option>
                    <option value="RAJSHAJI">RAJSHAJI</option>
                    <option value="SYLHET">SYLHET</option>
                    <option value="CHITTAGONG">CHITTAGONG</option>
                </select><br>
            </div>

            <div class="form-group">

                <label for="Zip"> <strong>Zip</strong></label>
                <input type="text" id="Zip">

            </div>

            <h2> Additional Information</h2>



            <small>Please enter your name, company or organization as you would like it to appear in our
                publications:</small>



            <div class="form-group">

                <label for="Name"> <strong>Name</strong> </label>
                <input type="text" id="Name">

            </div>

            <input type="checkbox">
            <small>I would like my gift to remain anonymous.</small><br>
            <input type="checkbox">
            <small>My employer offers a matching gift program. I will mail the matching gift form.</small><br>
            <input type="checkbox">
            <small>Please save the cost of acknowledging this gift by not mailing a thank you letter.</small><br>

            <div class="form-group">
                <label for="comments"><strong>comments</strong><br><small>(Please type any questions or feedback
                        here)</small> </label>
                <input type="text" id="comments">

            </div>


            <div class="checkbox">
                <label><strong>How may we contact you?</strong></label>

                <input type="checkbox" id="E-mail">
                <label for="E-mail">E-mail</label><br>

                <input type="checkbox" id="Postmail">
                <label for="Postmail">Postmail</label><br>

                <input type="checkbox" id="Telephone">
                <label for="Telephone">Telephone</label><br>

                <input type="checkbox" id="Fax1">
                <label for="Fax1">Fax</label><br>
            </div>

            <small>I would like to receive newsletters and information about special events by:</small>
            <div class="checkbox">
                <input type="checkbox" id="E-mail1">
                <label for="E-mail1">E-mail</label><br>

                <input type="checkbox" id="Postmail1">
                <label for="Postmail1">Postmail</label><br>


            </div>


            <input type="checkbox">
            <label for="I would like information about volunteering with the">I would like information about
                volunteering with the</label><br>













            <br><input type="Reset">
            <input type="submit" value="Continue"><br>

            


            <small>Donate online with confidence. You are on a secure server<br>

                If you have any problems or questions, please contact support.</small>



    </form>



</body>

</html>