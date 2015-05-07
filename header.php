
  <div class= "active">
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Series For You</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href='series.php?numall=1'>ซีรีย์ทั้งหมด</a></li>
                    <li class="divider"></li>
                    <li><a href="series_eng.php?numeng=1">ซีรีย์ฝรั่ง</a></li>
                    <li><a href="series_kor.php?numkor=1">ซีรีย์เกาหลี</a></li>
                  </ul>
                </li>
          </ul>
          
          <?php
          session_start();
          if(isset($_SESSION['logined']))
          {
            ?>
              <form class="navbar-form navbar-right">
                <font color='#FFFFFF'>	
				<?php echo "<a href='user.php'>Hello , ".$_SESSION['logined'].'</a>&nbsp&nbsp&nbsp&nbsp'; ?>
				</font> 
				<a href="logout.php" class="btn btn-danger"> Log Out </a>
              </form>
            <?php
          }else{
            ?>
            <form class="navbar-form navbar-right" role="form" method="POST" action="check_login.php">
                <div class="form-group">
                  <input type="text" name = "username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name = "password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <a href="register.php" class="btn btn-success"> Register </a>
              </form>
              <?php
          }
          ?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>
