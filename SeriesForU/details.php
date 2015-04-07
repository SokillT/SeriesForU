<?php 
    include_once "header.php"; 
    include('connect/db.php');
    $result  = mysql_query("select * from series where (SID ='".$_GET['no']."')",$con);  
    $row = mysql_fetch_array($result);

    include_once 'connect/db-connect.php';
    include_once 'connect/db-series.php';
    $result = getRating($con,$row['SID']);
    $rate = 0;
    for ($i=0; $i<count($result) ; $i++) 
    { 
        $rate = $rate+$result[$i]['rate'];
    }
    if ($rate != 0) {
        $rate = $rate/count($result);
        $rate = number_format($rate, 1, '.', '');
    }

    if (isset($_SESSION['logined'])) {
        $_SESSION['seriesID'] = $row['SID'];
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link rel="shortcut icon" href="docs-assets/ico/favicon.png" -->

    <title><?php echo ($row['SName']);?></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">
  </head>
  <body>
        <br>
        <div class="container well">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <?php include_once "plan-list.php"; ?>
                        <h1><?php echo ($row['SName']); ?></h1>
                    </div>
                    <img src="image/<?php echo $_GET['no']?>.jpg" class="col-md-4" style="padding-left:0px; padding-right:15px; padding-bottom:10px;">
                    <div class="col-md-8" style="border-radius:10px; border-color:#808080; border-style:solid; padding-top:20px; margin-bottom:10px;">
                        <dl class="dl-horizontal col-md-8" >
                            <dt>Genre :</dt>
                            <dd><?php echo $row['SFormat']; ?></dd>
                            <dt>No. of episodes :</dt>
                            <dd><?php echo $row['SEp']; ?></dd>
                            <dt>Country of origin :</dt>
                            <dd><?php echo $row['SCountry']; ?></dd>
                            <dt>Original channel :</dt>
                            <dd><?php echo $row['SChannel']; ?></dd>
                            <dt>Original run :</dt>
                            <dd><?php echo $row['SYear']; ?></dd>
                        </dl>
                        <div class="col-md-4 text-center" > <!--style="border-color:#808080; border-style:solid;" -->
                            <h1 class="rating-num" style="padding:0px; margin-top:0; margin-bottom:3px;"><?php echo $rate; ?></h1>
                            <div class="rating">
                                <?php
                                    $star = round($rate);
                                    for ($i=0; $i<5; $i++) {
                                        if ($i<$star) {
                                            echo "<span class='glyphicon glyphicon-star'></span> ";
                                        }
                                        else
                                            echo "<span class='glyphicon glyphicon-star-empty'></span> ";
                                    }
                                ?>
                            </div>
                            <div id="total-user">
                                <span class="glyphicon glyphicon-user"></span>&nbsp
                                <?php echo count($result)." total"; ?>
                            </div>
                            <?php 
                                if (isset($_SESSION['logined'])) {
                                    echo "Vote: ";
                                    echo "<a href='rating.php?acc=".$_SESSION['logined']."&id=".$row['SID']."&vote=1'>1</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['logined']."&id=".$row['SID']."&vote=2'>2</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['logined']."&id=".$row['SID']."&vote=3'>3</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['logined']."&id=".$row['SID']."&vote=4'>4</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['logined']."&id=".$row['SID']."&vote=5'>5</a> ";
                                }
                            ?>
                        </div>
                    </div>
                    <?php 
                        echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                        echo $row['Description']."</p>"; 
                    ?>
                </div>
            </div>
        </div>

        <?php 
            if (isset($_SESSION['logined'])) {
                include_once 'comment.php';
            }
        ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
