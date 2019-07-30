<?php
include 'php/connection.php';
session_start();
$_SESSION['city'] = 'europe';
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
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f19f4d;
}

.carousel-indicators li {
    border-color: #f19f4d;
}

.heading{
      font-family: "Nunito";
      padding-top: 50px;
    }

.carousel-indicators li.active {
    background-color: #f19f4d;
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
    border: 1px solid #f19f4d;
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .3);
}

.panel-footer .btn:hover {
    border: 1px solid #f19f4d;
    background-color: #fff !important;
    color: #f19f4d;
}

.panel-heading {
    color: #fff !important;
    background-color: #f19f4d !important;
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
    background-color: #f19f4d;
    color: #fff;
}
</style>
</head>
<body>

  <h2 class="heading"><center>VIVE LA EUROPE</center></h2>
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
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
    <li data-target="#myCarousel" data-slide-to="12"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/madrid.jpg" alt="Madrid">
      <div class="carousel-caption">
        <h3>Madrid</h3>
        <p>Hala Madrid!!</p>
      </div>
    </div>

    <div class="item">
      <img src="img/valencia.jpg" alt="Valencia">
      <div class="carousel-caption">
        <h3>Valencia</h3>
        <p>Explore here without sleeping!!!</p>
      </div>
    </div>

    <div class="item">
      <img src="img/eiffel.jpg" alt="Paris">
      <div class="carousel-caption">
        <h3>Paris</h3>
        <p>Mon Amour!!</p>
      </div>
    </div>

    <div class="item">
      <img src="img/mont.jpg" alt="Mont-St-Michel">
      <div class="carousel-caption">
        <h3>Mont-St-Michel</h3>
        <p>The island where people and Gods meet</p>
      </div>
    </div>

    <div class="item">
      <img src="img/neuschwanstein.jpg" alt="Neuschwanstein">
      <div class="carousel-caption">
        <h3>Neuschwanstein Castle</h3>
        <p>There are no rules of architecture for a castle in the clouds</p>
      </div>
    </div>

    <div class="item">
        <img src="img/hanover.jpg" alt="Hanover">
        <div class="carousel-caption">
          <h3>Hanover City Hall</h3>
          <p>Every single day is a learning experience.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/alps.jpg" alt="Alps">
        <div class="carousel-caption">
          <h3>Alps</h3>
          <p>King of the peak and glacier, King of the cold, white scAlps, He lifts his head at that close tread, The eagle of the Alps.</p>
        </div>
      </div>
      <div class="item">
        <img src="img/wiesen.jpg" alt="Wiesen">
        <div class="carousel-caption">
          <h3>Wiesen Viaduct</h3>
          <p>Race Against Beauty!!</p>
        </div>
      </div>
      <div class="item">
        <img src="img/venice.jpg" alt="Venice">
        <div class="carousel-caption">
          <h3>Venice</h3>
          <p>Vacation Paradise</p>
        </div>
      </div>
      <div class="item">
        <img src="img/rome.jpg" alt="Rome">
        <div class="carousel-caption">
          <h3>Rome</h3>
          <p>Rome wasn't built in a day and neither was Syracuse</p>
        </div>
      </div>
      <div class="item">
        <img src="img/florence.jpg" alt="Florence">
        <div class="carousel-caption">
          <h3>Florence</h3>
          <p>Have you heard of Stendhal syndrome, that supposed illness that causes sufferers to grow faint at the sight of great beauty? It also goes by the name “Florence syndrome”.</p>
        </div>
      </div>
      <div class="item">
        <img src="img/santorini.jpg" alt="Santorini">
        <div class="carousel-caption">
          <h3>Santorini</h3>
          <p>Did you know that the whole complex of Santorini islands is still an active volcano? </p>
        </div>
      </div>
      <div class="item">
        <img src="img/parthenon.jpg" alt="Parthenon">
        <div class="carousel-caption">
          <h3>Parthenon</h3>
          <p>The embodiment of Athenian wealth</p>
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
            <p><strong>30</strong> Days & <strong>29</strong> Nights</p>
		   <p>Short & Sweet, but Complete Experience</p>
           <p>Guided Country Tours</p>
           <p>Pefect Blend of old and new times</p>
           
           <p>Economy Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 20 Lakhs only</h3>
           
           <form method="POST" action="pay.php">
           <button type="submit" name="basic" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Pro</h1>
         </div>
         <div class="panel-body">
           <p><strong>45</strong> Days & <strong>44</strong> Nights</p>
		   <p>Exclusive warm & cold Expiriences</p>
           <p>Exclusive Cruise Days</p>
           <p>Complete 7 County visit</p>
           
           <p>Business Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 24 Lacks only</h3>
           <form method="POST" action="pay.php">
           <button type="submit" name="pro" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
    <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Premium</h1>
         </div>
         <div class="panel-body">
          <p><strong>60</strong> Days & <strong>59</strong> Nights</p>
           <p>Meeting with The Pope </p>
           
           <p>Exclusive Sport Events</p>
		   <p>Premium Sight seeings</p>
		   <p>Charter Seatings</p>
           
         </div>
         <div class="panel-footer">
           <h3>₹ 28.5 Lacks only</h3>
           <form method="POST" action="pay.php">
           <button type="submit" name="premium" class="btn btn-lg" > Pay Now</button>
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
