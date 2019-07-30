<?php
include 'php/connection.php';
session_start();
$_SESSION['city'] = 'africa';
if (!isset($_SESSION['username']))
echo "<script>
alert('Please Login or Signup');
window.location.href='test.php';
</script>";

?>

<?php
include 'include/navigation.php';
?>

<html>

<head>

  <title>Using Bootstrap City</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #f4511e;
    }

    .carousel-indicators li {
      border-color: #f4511e;
    }

    .heading{
      font-family: "Nunito";
      padding-top: 50px;
    }

    .carousel-indicators li.active {
      background-color: #f4511e;
    }

    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    .panel {
      border: 1px solid #f4511e;
      border-radius: 0;
      transition: box-shadow 0.5s;
    }

    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0, 0, 0, .3);
    }

    .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }

    .panel-footer {
      background-color: #fff !important;
    }

    .panel-footer h3 {
      font-size: 32px;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
    }
  </style>
</head>

<body>

  <h2 class="heading">
    <center>EXPLORING AFRIĆAS</center>
  </h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/safari.jpg" alt="safari">
        <div class="carousel-caption">
          <h3>African Safari</h3>
          <p>you know you are truly alive ,when you are living among lions.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/capetown.jpg" alt="capetown">
        <div class="carousel-caption">
          <h3>Cape Town</h3>
          <p>Visit Cape Town and history is never far from your grasp.It's impossible not to be affected by the trials
            and tribulations of the struggle.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/sphinx.jpg" alt="sphinx">
        <div class="carousel-caption">
          <h3>Sphinx</h3>
          <p>The sphinx-riddle.Solve it, or be torn to bits ,is the decree.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/grancanaria.jpg" alt="grancanaria">
        <div class="carousel-caption">
          <h3>Gran Canaria</h3>
          <p>The voyage never ends but it goes on over and over again in quiet chambers,visit canaria islands and have
            your first snorkelling experience.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/mauritius.jpg" alt="mauritius">
        <div class="carousel-caption">
          <h3>Mauritius</h3>
          <p>Lost in paradise.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/madeira.jpg" alt="madeira">
        <div class="carousel-caption">
          <h3>Madeira</h3>
          <p>Say hello,to the portuguese in you.The northwest islands of africa welcomes you to madeira.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/luxor.png" alt="luxor">
        <div class="carousel-caption">
          <h3>Luxor</h3>
          <p>Welcome to the queens valley.</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid">
    <div class="text-center">
      <h2>Pricing</h2>
      <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Basic</h1>
          </div>
          <div class="panel-body">
           <p><strong>15</strong> Days & <strong>14</strong> Nights</p>
		    <p>Short & Sweet, but a Complete Experience</p>
			<p></p>
           <p>Guided Country Tours</p>
           <p>Exclusive Wildlife Experience</p>
           <p>Economy Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 10 Lacks only</h3>
            <form method="POST" action="pay.php"> <button type="submit" name="basic"
                class="btn btn-lg"> Pay Now</button> </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Pro</h1>
          </div>
          <div class="panel-body">
            <p><strong>30</strong> Days & <strong>29</strong> Nights</p>
		   <p>Ancient Egyptian to Modern SA Experience </p>
           <p>Exclusive Cruise Days</p>
           <p>Mt. Kilimanjaro Trecking</p>
           
           <p>Business Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 15 Lacks only</h3>
            <form method="POST" action="pay.php"> <button type="submit" name="pro"
                class="btn btn-lg"> Pay Now</button> </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Premium</h1>
          </div>
          <div class="panel-body">
             <p><strong>45</strong> Days & <strong>44</strong> Nights</p>
           <p>Tameing the Wildlife</i> </p>
           
           <p>Exclusive Sport Events</p>
		   
           <p>Ancient Egyptian to Modern SA Experience </p>
		   <p>Charter Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 20 Lacks only</h3>
           
            <form method="POST" action="pay.php">
            <button type="submit" name="premium" class="btn btn-lg"> Pay Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include 'include/footer.php';
?>


</body>

</html>