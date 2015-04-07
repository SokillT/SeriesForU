<?php 
        include_once "{$_SERVER['DOCUMENT_ROOT']}/header.php"; 
        include('connect/db.php');
        $result  = mysql_query("select * from series where (SID ='".$_GET['no']."')",$con);  
        $row = mysql_fetch_array($result);
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
        <div class="container well">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="span4 offset4 ">
                                <h1> <?php echo ($row['SName']); ?></h1>
                                <img src = "image/<?php echo $_GET['no']?>.jpg" width="300" height="400" align="left" style='padding-right:10px; padding-bottom:10px'/>
                                <p> <?php echo ($row['Description']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
