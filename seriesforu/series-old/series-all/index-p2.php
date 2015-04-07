<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <title>Series</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/stylesheet.css" rel="stylesheet">
  </head>

  <body>
    <?php include_once "{$_SERVER['DOCUMENT_ROOT']}/series/header.php"; ?>

    <!-- CONTAINER
    ================================================== -->
    <div class="container">
      <!-- Header -->
      <div class="page-header">
        <h1>Series <small>ซีรีย์ทั้งหมด</small></h1>
      </div>

      <!-- Example row of columns -->
      <div class="row" style='margin-top:10px; margin-bottom:10px'>
        <div class="col-md-4" onmouseover="this.style.background = '#F7F7F7'" onmouseout="this.style.background = '#FFFFFF'">
          <h3>Revenge Season1</h3>
          <img src="../image/Revenge-SS1.jpg" alt="Revenge SS1" width="150" height="200" align="left" style='padding-right:10px; padding-bottom:10px'>
          <p>หญิงสาวผู้ที่กลับมาแก้แค้นชาวเมืองที่ เป็นต้นเหตุในการทำลายครอบครัวของเธอ</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" onmouseover="this.style.background = '#F7F7F7'" onmouseout="this.style.background = '#FFFFFF'">
          <h3>Revenge Season2</h3>
          <img src="../image/Revenge-SS2.jpg" alt="Revenge SS2" width="150" height="200" align="left" style='padding-right:10px; padding-bottom:10px'>
          <p>หญิงสาวผู้ที่กลับมาแก้แค้นชาวเมืองที่ เป็นต้นเหตุในการทำลายครอบครัวของเธอ</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div> <!-- /row -->
    </div> <!-- /container -->

    <center>
      <ul class="pagination">
        <li><a href="../series-all/index.php">Previous</a></li>
        <li class="active"><a href="#">2<span class="sr-only">(current)</span></a></li>
        <li class="disabled"><a href="#">Next</a></li>
      </ul>
    </center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>
