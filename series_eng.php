<?php
  //include_once '../connect/db-series.php';
  include_once "connect/db-connect.php";
  include_once "connect/db-series.php";

  $get = getSeriesE($con);
  $numpage = $_GET['numeng'];
  //echo var_dump($get);
  
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      
      <title>ซีรีย์ฝรั่ง</title>

      <!-- Bootstrap core CSS -->
      <link href="dist/css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/stylesheet.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once "header.php"; ?>
    <div class="container">
          <!-- Header -->
          <div class="page-header">
            <h1>Series <small>ซีรีย์ฝรั่ง</small></h1>
          </div>
      
      <div class='row' style='margin-top:10px; margin-bottom:10px'>
          <?php 
              $i=0;
              for($i=($numpage-1)*9; $i<=$numpage*9-1; $i++) {
                if ($i<=count($get)-1){
                $get_Name = $get[$i]['SName'];
                $get_Description = $get[$i]['Description'];
          ?>
              <div class='col-md-4' onmouseover="this.style.background='#F7F7F7'" onmouseout="this.style.background='#FFFFFF'">
          <?php
              echo "<h3>".$get_Name."</h3>";
              echo "<img src='image/".$get[$i]['SID'].".jpg' width='150' height='200' align='left' style='padding-right:10px; padding-bottom:10px'>";
              echo subString($get_Description);
              echo "<p><a class='btn btn-default' href='details.php?no=".$get[$i]['SID']."' role='button' style='margin-top:5px'>View details &raquo;</a></p>";
          ?>
              </div>
          <?php
              if (($i+1)%3==0 && $i!=0) {
          ?>
              </div><div class='row' style='margin-top:10px; margin-bottom:10px'>
          <?php
              }
            }
          }
          ?>
          </div>
        </div>

        <center>
                  <ul class="pagination">
                        <?php if($numpage == 1){ ?>
                              <li class="disabled"><a href="#">Previous</a></li> <?php } 
                              else { ?>
                              <li><a href="series_eng.php?numeng=<?php echo $numpage-1 ?>">Previous</a></li> <?php } ?>
                              <li class="active"><a href="#"><?php echo $numpage ?><span class="sr-only"></span></a></li>
                        <?php if($numpage*9 > count($get)){ ?>
                              <li class="disabled"><a href="#">Next</a></li> <?php } 
                              else { ?>
                              <li><a href="series_eng.php?numeng=<?php echo $numpage+1 ?>">Next</a></li> <?php } ?>
                  </ul>
            </center>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>