<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Series for you</title>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <?php include_once "header.php"; ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="details.php?no=KR014">
                <img src="img/the heir2.jpg"  height="350" width="600">
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="item"> 
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="details.php?no=UK001">
                <img src="img/atlantis.jpg"  height="350" width="600">
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="details.php?no=UK007">
                <img src="img/secret.png"  height="350" width="600">
                </a> 
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="details.php?no=UK002">
                <img src="img/vampire.jpg"  height="350" width="600">
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <font color="#000000">
      <?php include_once "container.php"; ?>
    </font>
  </body>
</html>
