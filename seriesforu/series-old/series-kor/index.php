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
        <h1>Series <small>ซีรีย์เกาหลี</small></h1>
      </div>

      <!-- Example row of columns -->
      <div class="row" style='margin-top:10px; margin-bottom:10px'>
        <div class="col-md-4" onmouseover="this.style.background = '#F7F7F7'" onmouseout="this.style.background = '#FFFFFF'">
          <h3>Moon Embracing the Sun</h3>
          <img src="../image/TheMoonEmbraceTheSun.jpg" alt="The Moon Embrace The Sun" width="150" height="200" align="left" style='padding-right:10px; padding-bottom:10px'>
          <p>เป็นเรื่องราวโรแมนติกย้อนยุคซึ่งเกิดขึ้นในสมัยโชซอน</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" onmouseover="this.style.background = '#F7F7F7'" onmouseout="this.style.background = '#FFFFFF'">
          <h3>I Miss You</h3>
          <img src="../image/IMissYou.jpg" alt="I Miss You" width="150" height="200" align="left" style='padding-right:10px; padding-bottom:10px'>
          <p>เป็นเรื่องราวความรักของชายหญิงคู่หนึ่ง ที่ยังเจ็บปวดกับความทรงจำ ของความรักในวัย 15 ในอดีต</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" onmouseover="this.style.background = '#F7F7F7'" onmouseout="this.style.background = '#FFFFFF'">
          <h3>Innocent Man</h3>
          <img src="../image/InnocentMan.jpg" alt="Innocent Man" width="150" height="200" align="left" style='padding-right:10px; padding-bottom:10px'>
          <p>เป็นเรื่องราวของ คังมารู นักศึกษาแพทย์จิตใจดี ต้องอกหักดังเป๊าะ เพราะแฟนสาว ฮันเจฮี ทิ้งเขาไป ด้วยรักที่ฝังใจทำให้เขาแค้นฝังหุ่น กลายเป็นแบดบอยและแก้แค้นแฟนสาว</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div> <!-- /row -->
    </div> <!-- /container -->

    <center>
      <ul class="pagination">
        <li class="disabled"><a href="#">Previous</a></li>
        <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
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
