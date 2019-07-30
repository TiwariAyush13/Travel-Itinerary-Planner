<html>

<head></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Titillium+Web" rel="stylesheet">
<script src="js/signup.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    .signup-form {
    background: url("img/signup.jpg");
    background-size: cover;
    color:white;
    font-family:"Titillium Web";
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 25px;
    padding-bottom: 25px;
    }

    input[type=text], input[type=password] {
    width: 100%;
    padding: 5px;
    color: black;
    margin: 5px 0 2px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: rgb(113, 143, 160);
    color: black;
    outline: none;
}
</style>

<script>
    function validate() {
        var check = fnameCheck() && lnamecheck() && usercheck() && phonecheck() && emailcheck() && passcheck() && confirmpasscheck() && zipcheck();
        return check;
    }
</script>

<body>
    <!-- SIGNUP FORM -->
    <div class="signup-form">
        <form method="POST" action="php/signup.php" onsubmit="return validate();">
            <div class="container">
                <h2>
                    <center>SIGNUP FORM</center><br>
                </h2>

                <h3>Personal Information</h3><br>
                <div class="row">
                    <div class="fname">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            FIRSTNAME*<br>
                            <input type="text" id="fname" name="fname" onchange="fnameCheck()" required>
                            <p id="fname-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="lname">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            LASTNAME*<br>
                            <input type="text" id="lname" name="lname" onchange="lnamecheck()" required>
                            <p id="lname-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="userid">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            USERID*<br>
                            <input type="text" id="userid" name="userid" onchange="usercheck()" required>
                            <p id="userid-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="city">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            CITY<br>
                            <input type="text" id="city" name="city">
                            <p id="city-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="zipcode">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            ZIPCODE*<br>
                            <input type="text" id="zipcode" name="zipcode" onchange="zipcheck()" required>
                            <p id="zipcode-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="phone">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            PHONE*<br>
                            <input type="text" id="phone" name="phone" onchange="phonecheck()" required>
                            <p id="phone-alert">&nbsp</p>
                        </div>
                    </div>

                    <h3>&nbsp&nbsp&nbspAccount Information</h3>
                    <div class="email">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            EMAIL-ID*<br>
                            <input type="text" id="email" name="email" onchange="emailcheck()" required>
                            <p id="email-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="password">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            PASSWORD*<br>
                            <input type="password" id="pass" name="pass" onchange="passcheck()" required>
                            <p id="pass-alert">&nbsp</p>
                        </div>
                    </div>

                    <div class="confirmpass">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            CONFIRM PASSWORD*<br>
                            <input type="password" id="c_pass" onchange="confirmpasscheck()" required>
                            <p id="confirm-pass-alert">&nbsp</p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="signgrid">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <center><button type="submit" class="btn btn-primary btn-lg" role="button">Sign Up
                            </button></center>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>