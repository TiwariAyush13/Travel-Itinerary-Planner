<?php
include 'php/connection.php';
session_start();
$_SESSION['city'] = 'usa';
if (!isset($_SESSION['username']))
echo "<script>
alert('Please Login or Signup');
window.location.href='test.php';
</script>";

?>

<?php
include 'include/navigation.php'
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
    color: #286da8;
}

.carousel-indicators li {
    border-color: #286da8;
}

.carousel-indicators li.active {
    background-color: #286da8;
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
    border: 1px solid #286da8;
    border-radius:0;
    transition: box-shadow 0.5s;
}

.heading{
      font-family: "Nunito";
      padding-top: 50px;
    }

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .3);
}

.panel-footer .btn:hover {
    border: 1px solid #286da8;
    background-color: #fff !important;
    color: #286da8;
}

.panel-heading {
    color: #fff !important;
    background-color: #286da8!important;
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
    background-color: #286da8;
    color: #fff;
}
</style>
</head>
<body>

  <h2 class="heading"><center>LAND OF LIBERTY</center></h2>
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
      <img src="img/lasvegas.jpg" alt="lasvegas">
      <div class="carousel-caption">
        <h3>Las Vegas</h3>
        <p>What Happens in Vegas,Stays in Vegas.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/disneyland.jpg" alt="disneyland">
      <div class="carousel-caption">
        <h3>Disney Land</h3>
        <p>Disneyland is the star,everything else is in the supporting role.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/statueofliberty.jpg" alt="statueofliberty">
      <div class="carousel-caption">
        <h3>Statue of Liberty</h3>
        <p>The torch of New York,Lady Liberty.</p>
      </div>
    </div>

    <div class="item">
        <img src="img/goldengatebridge.jpg" alt="goldengatebridge">
        <div class="carousel-caption">
          <h3>Golden Gate Bridge</h3>
          <p>It is a giant moving math problem.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/hollywood.jpeg" alt="losangeles">
        <div class="carousel-caption">
          <h3>Hollywood,Los Angeles</h3>
          <p>Get Lost in the city of stars.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/mountrushmore.jpg" alt="mountrushmore">
        <div class="carousel-caption">
          <h3>Mount Rushmore</h3>
          <p>Feel the presence of the history writers of america.</p>
        </div>
      </div>
      <div class="item">
        <img src="img/grandcanyon.jpg" alt="grandcanyon">
        <div class="carousel-caption">
          <h3>Grand Canyon</h3>
          <p>Freedom lies in being bold. WE must take adventures in order to know where we belong.</p>
        </div>
      </div>
      <div class="item">
        <img src="img/whitehouse.jpg" alt="whitehouse">
        <div class="carousel-caption">
          <h3>Washington D.C.</h3>
          <p>Home of the most powerful man in the world.</p>
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
            <p><strong>7</strong> Days & <strong>8</strong> Nights</p>
		   <p>Short & Sweet, but Complete Experience</p>
           <p>Guided City Tours</p>
           <p>Exclusive sight seeing</p>
           
           <p>Economy Seatings</p>
         </div>
         
         <div class="panel-footer">
           <h3>₹ 7 Lacks only</h3>
           
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
           <p><strong>10</strong> Days & <strong>11</strong> Nights</p>
		   <p>Taming the Wild West</p>
           <p>Exclusive Cruise Days</p>
           <p>Enjoy the American night life</p>
           
           <p>Business Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 10 Lacks only</h3>
          
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
           <p><strong>15</strong> Days & <strong>14</strong> Nights</p>
           <p>Premium American Experience </p>
           
           <p>Exclusive Sport Events</p>
		   <p>Premium Sight seeings</p>
		   <p>Charter Seatings</p>
           
         </div>
         <div class="panel-footer">
           <h3>₹ 13.5 Lacks only</h3>
           
           <form method="POST" action="pay.php">
           <button type="submit" name="premium" class="btn btn-lg" > Pay Now</button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

<?php
include 'include/footer.php'
?>

</body>
</html>
