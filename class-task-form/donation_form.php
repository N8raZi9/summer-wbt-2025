<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>


<?php
$firstNameErr=$lastNameErr=$address1Err=$cityErr=$stateErr=$zipCodeErr ="";
$firstName=$lastName=$address1=$city=$state=$zipCode = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "Name is required";
  } else {
    $firstName = test_input($_POST["name"]);
    if (!preg_match("/^[A-Z-' ]*$/",$firstName)) {
      $firstNameErr = "Only Capital letters and white space allowed";
    }
  }

  if (empty($_POST["lastNameErr"])) {
    $lastNameErr = "Name is required";
  } else {
    $lastName = test_input($_POST["name"]);
    if (!preg_match("/^[A-Z-' ]*$/",$lastName)) {
      $lastNameErr = "Only Capital letters and white space allowed";
    }
  }


}
?>



<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- Donor Information Section -->
            <div class="section-title">Donor Information</div>

            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" value="<?php echo $firstName;?>">
                <span class="error">* <?php echo $firstNameErr;?></span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" value="<?php echo $lastName;?>">
                <span class="error">* <?php echo $lastNameErr;?></span>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" value="<?php echo $company;?>">
            </div>
            <div class="form-group">
                <label for="address1">Address 1</label>
                <input type="text" id="address1" name="address1" value="<?php echo $address1;?>">
                <span class="error">* <?php echo $address1Err;?></span>
            </div>
            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2" value="<?php echo $address2;?>">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" value="<?php echo $city;?>">
                <span class="error">* <?php echo $cityErr;?></span>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" value="<?php echo $state;?>">
                    <option value="">Select a State</option>
                    <option value="<?php echo $state;?>">Dhaka</option>
                    <option value="<?php echo $state;?>">Tokyo</option>
                    <option value="<?php echo $state;?>">New York</option>
                    <option value="<?php echo $state;?>">Liverpool</option>
                </select>
                <span class="error">* <?php echo $stateErr;?></span>
            </div>
            <div class="form-group">
                <label for="zipCode">Zip Code</label>
                <input type="text" id="zipCode" name="zipCode" value="<?php echo $zipCode;?>">
                <span class="error">* <?php echo $zipCodeErr;?></span>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="">Select a Country</option>
                    <option value="US">Bangladesh</option>
                    <option value="US">Japan</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="GB">United Kingdom</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone;?>">
            </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="tel" id="fax" name="fax" value="<?php echo $fax;?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>

            <div class="form-group">
                <label>Donation Amount*</label>
                <div class="radio-group">
                    <label><input type="radio" name="donationAmount" value="None"> None</label>
                    <label><input type="radio" name="donationAmount" <?php if (isset($donationAmount) && $donationAmount=="$50") echo "checked";?> value="50"> $50</label>
                    <label><input type="radio" name="donationAmount" <?php if (isset($donationAmount) && $donationAmount=="$75") echo "checked";?>  value="75"> $75</label>
                    <label><input type="radio" name="donationAmount" <?php if (isset($donationAmount) && $donationAmount=="$100") echo "checked";?>  value="100"> $100</label>
                    <label><input type="radio" name="donationAmount" <?php if (isset($donationAmount) && $donationAmount=="$250") echo "checked";?>  value="250"> $250</label>
                    <label><input type="radio" name="donationAmount" value="Other" checked> Other Amount $ <input
                            type="text" name="otherAmount" class="inline-input"></label>
                </div>
            </div>
            <div class="note-text">(Check a button or type in your amount)</div>
            


            <!-- Buttons -->
            <div class="button-group">
                <button type="reset" class="reset">Reset</button>
                <button type="submit" class="continue">Continue</button>
            </div>

            <!-- Footer Info -->
            
        </form>

</body>
</html>