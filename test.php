<?php
session_start();
include 'include/navigation.php';
?>

<html>

<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Titillium+Web" rel="stylesheet">

<title>Using Bootstrap Constructively</title>

<style>

    .header{
        font-family: "Nunito";
        font-display: block;
        font-style: oblique;
        padding-left: 100px;
        margin: 0px;
    }

    .about-us{
    background-color:#DCDCDC;
    color:#2F4F4F;
    font-family:"Nunito";
    padding-top: 25px;
    padding-bottom:25px;
    }

    .contact-info{
        margin-top: 80px;
        margin-left: 50px;
    }

    .about-text{
        font-weight: bold;
    }

    .btn {
    margin: 15px 0;
    background-color: #ff533d;
    color: #fff;
    }

    .login{
    background: url("img/lion.jpg");
    background-size: cover;
    color:white;
    font-family:"Titillium Web";
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 25px;
    padding-top: 25px;
    }

     .img-responsive{
        height: 300px;
        width: auto;
        margin-left:50px;
        margin-top: 20px;
    }

    .image{
        height: 200px;
        width: auto;
        border: #ffffff67;
        border-width: 10px;
		box-shadow: 0 2px 8px black;
    }
	
	.image:hover {
        box-shadow: 0 1px 8px black;
    }
	
	.thumbnail {
     border: 0 none;
     box-shadow: none;
	 border-radius:0px;
    }

    .btn {
    margin: 15px 0;
    background-color: #f19f4d;
    color: #fff;
    }   

    .logo{
        margin-top:25px;
    }

	.thumbnail:hover {
	    box-shadow: 0 1px 16px #DCDCDC;
	}

    .photo-grid{
        background: #ffffff67;
        font-family: "Montserrat";
        padding-top: 50px;
        padding-bottom: 100px;
    }

    .contact{
        background-color: rgba(0, 204, 255, 0.986);
        padding-top:25px;
        padding-bottom:25px;
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

.contact{
    font-family: "Nunito";
    font-weight: bold;
    color:#2F4F4F;
}
   
</style>

<body>

    <div style="height: 50px;">
        <p>empty div</p>
    </div>

    <!--ABOUT US-->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="img/about.jpg" class="img-responsive" img style="border:20px solid white" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3><b>About Us</b></h3>
                    <p>Reho is an experienced travel management company. We work with you to manage all elements of
                        your travel in an efficient, cost effective and ethical manner.<br>

                        Reho Travel grew out of an overland luxury bus concept in the UK in the 70’s then
                        transformed
                        into a High Street bucket shop in the 80’s. The company has now evolved into a highly
                        respected
                        purpose driven Australian owned travel management company. Reho Travel is committed to
                        making a
                        difference in the world that its clients travel to, whether on business, on holiday or on a
                        study tour. With offices in Melbourne and Sydney, the company is focused on managing the
                        travel
                        for companies with a travel spend up to $5m.</p>
                    <p><I>Why trust us?</I></p>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <li> bullet </li>
                        <li> bullet </li>
                        <li> bullet </li>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <li> bullet </li>
                        <li> bullet </li>
                        <li> bullet </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--LOGIN-->
    <div class="login" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"></div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <img src="img/member.png" class="logo" height="220px" width="auto">
                </div>
                <?php if (!isset($_SESSION['username'])) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <h3><b>Already have an account? Login!</b></h3>
                    <br>
                    <form method="POST" action="php/login.php">
                        EMAIL:<br>
                        <input type="text" name="login-email" required><br>
                        PASSWORD:<br>
                        <input type="password" name="login-password" required><br>
                        <button class="btn btn-lg" type="submit">LOGIN</button>
                    </form>
                    <p>Not a member ? <a href="signup.php">Signup Now!</a> </p>
                </div>
                <?php 
            } else { ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <br><br><br>
                    <h2>Welcome
                        <?php echo $_SESSION['username'] ?>
                    </h2>
                </div>
                <?php 
            } ?>
            </div>
        </div>
    </div>
    </div>

    <!--PHOTO GRID-->
    <div class="photo-grid">
        <div class="container">
            <h2>WE OFFER THESE EXCITING TRAVEL DESTINATIONS!</h2><br><br>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="british.php" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/lon.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>The Great British Endeavor</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Star Hotels</p>
                                <p>✓ All 7 Isles</p>
                                <p>✓ Flight tickets included</p>
                                <p>✓ Guided visits</p>
                                <h5><b> Starting at ₹ 3.5 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="USA.php" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/D.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>The Land of Liberty</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Star Hotels</p>
                                <p>✓ Exclusive sight seeing</p>
                                <p>✓ A City per day</p>
                                <p>✓ Flight tickets included</p>

                                <h5><b> Starting at ₹ 7 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="europe.php" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/eu.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>Vive La Europe</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Star Hotels</p>
                                <p>✓ Rich Anciet European Experience </p>
                                <p>✓ Flight tickets included</p>
                                <p>✓ Guided Visits</p>
                                <h5><b> Starting at ₹ 20 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="india.html" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/K.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>Land of Gods</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Stars Hotel</p>
                                <p>✓ All Inclusive</p>
                                <p>✓ Flight tickets included</p>
                                <p>✓ Guided visits</p>
                                <h5><b> Starting at ₹ 1.5 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="africa.php" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/T.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>Exploring Afrićas</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Star Hotels</p>
                                <p>✓ Exclusive sight seeing</p>
                                <p>✓ Flight tickets included</p>
                                <p>✓ All the way from Sahara to Cape Town</p>
                                <h5><b> Starting at ₹ 10 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-8">
                    <a href="australia.php" style="text-decoration:none;">
                        <div class="thumbnail">
                            <img src="img/Au.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <h3><b>Australian Blende</b></h3>
                                <p>&nbsp;</p>
                                <p>✓ 5 Star Hotels</p>
                                <p>✓ Living the Extreme Metropolis</p>
                                <p>✓ Tameing the Wilderness</p>
                                <p>✓ Flight tickets included</p>

                                <h5><b> Starting at ₹ 4.5 lakhs only</b></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                        <p>Please fill out the form below to send us an
                            email and we will get back to you as soon
                            as possible.</p>
                    </div>
                    <form method="POST" action="php/contactUs.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="abc" name="contact-name" class="form-control" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="contact-email" class="form-control" placeholder="Email"
                                        required>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" class="form-control" rows="4" placeholder="Message"
                                required maxlength="256"></textarea>

                        </div>
                        <div id="success">
                            <p></p>
                        </div>
                        <button type="submit" class="btn btn-custom btn-lg">Send
                            Message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 contact-info">
                <div class="contact-item">
                    <h4>Contact Info</h4>
                    <p>JAYPEE INSTITUTE OF INFORMATION TECHNOLOGY<br>
                        SECTOR 62, NOIDA</p>
                </div>
                <div class="contact-item">
                    <p> 7408963464 </p>
                </div>
                <div class="contact-item">
                    <p> bytestack@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>