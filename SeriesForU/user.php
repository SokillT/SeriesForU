<?php 
	include_once "header.php"; 
	include('connect/db.php');
    $result  = mysql_query("select * from account where (userName ='".$_SESSION['logined']."')",$con);  
    $row = mysql_fetch_array($result);

	if(!isset($_SESSION['logined']))
  {
		header("Location:index.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<script type="text/javascript" src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<link href="dist/css/bootstrap.css" rel="stylesheet">
    	<link href="css/stylesheet.css" rel="stylesheet">
      <script src="js/jquery.js"></script>

    	<title>My Account</title>
      <input type="hidden" id='logined' value="<?php echo $_SESSION['logined']?>">        
      <script>
        $(document).ready(function(){
          $('button[id^="plus"').click(function(){
            var id = $(this).attr('id').substr(4);
            $.post("updatelist.php",{seriesID :$('#seriesID'+id).val(), EP:$('#now'+id).html(), logined:$('#logined').val() })
            .done(function(data){
              if(data == "0"){
                alert("ดูจบแล้วน้า");
                $( ".rowL"+id ).remove();
              }
              else{
                alert("ดูถึงตอนที่ "+data+" แล้วน้าา");
                $('#now'+id).html(data);
              }
            })
          });
        });
      </script>

      <script>
        $(document).ready(function(){
          $('button[id^="add"').click(function(){
            var id2 = $(this).attr('id').substr(3);
            $.post("plan2list.php",{planID :$('#planID'+id2).val(), logined:$('#logined').val() })
              .done(function(data){
                alert("เพิ่มเรื่องนี้เข้าลิสของคุณเรียบร้อยแล้วจ้าา");
                $( ".rowP"+id2 ).remove();
              });
          });
        });
      </script>  

      <script>
        $(document).ready(function(){
          $('button[id^="remove"').click(function(){
            var id2 = $(this).attr('id').substr(6);
            $.post("plan_delete.php",{planID :$('#planID'+id2).val(), logined:$('#logined').val() })
              .done(function(data){
                alert("ลบเรื่องนี้แล้วจ้า");
                $( ".rowP"+id2 ).remove();
              });
          });
        });
      </script> 

  	</head>

  	<body>
      <br>
      <div class="container well">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3">
        			<p><?php echo "<h3>".$_SESSION['logined']."'s Profile</h3>";?></p>
              <?php
                if ($row[3] == "F")
                  echo "<img src='image/female.jpg' alt='userpic' class='col-md-12 img-thumbnail' align='left' style='padding:3px; margin-bottom:10px;'>";
                else
                  echo "<img src='image/male.jpg' alt='userpic' class='col-md-12 img-thumbnail' align='left' style='padding:3px; margin-bottom:10px;'>";
              ?>
          </div>
          <div class="col-md-9">
						<ul class="nav nav-tabs">
          		<li class="active">
    			      <a href="#profile" data-toggle="tab">Profile</a>
  				    </li>
  				 	  <li><a href="#list" data-toggle="tab">My List</a></li>
  				    <li><a href="#plan" data-toggle="tab">My Plan</a></li>
			        <li><a href="#history" data-toggle="tab">History</a></li>
		        </ul>
            <div class="tab-content">
							<div class="tab-pane active well"  id="profile" style="padding-left:20px;">
				   			userName  :  <?php echo $row['userName']; ?><br><br>
            		Email     :  <?php echo $row['Email']; ?><br><br>
            		Gender    :  <?php
								if($row['Gender']=='F'){
									echo "Female";
								} 
								else{
									echo "Male";
								}?><br><br>
            					
                <u><a href = 'user-edit.php?username=<?php echo $row['userName'] ?>'>Edit Profile</a></u>
            	</div>

        			<div class="tab-pane well" id="list">
      					<table class="table table-condensed" style="width:100%" align="center">
       						<tr>
                		<th class="text-center">#</th>
            				<th class="text-center">Title</th> 
        						<th class="text-center">No.Ep</th>           						
                    <th class="text-center">No.Now</th>
                    <th class="text-center"></th>
          					<th class="text-center">Date</th>
        						<th class="text-center">Score</th>
              		</tr>
                  <?php
                    $sql_list = "SELECT series.SID,SName,SEp,LEp,LDate FROM series,list WHERE list.userName = '".$row['userName']."' AND list.SID = series.SID";
                      $result_list = mysql_query($sql_list,$con);
                      
                      $i =0;
                      while($row_list = mysql_fetch_array($result_list,MYSQLI_NUM)){
                        $i++;
                        $sql_rate = "SELECT rate FROM rating WHERE userName = '" .$row['userName']."' AND SID ='".$row_list[0]."'";
                        $result_rate = mysql_query($sql_rate,$con);
                        if ($row_rate = mysql_fetch_array($result_rate,MYSQLI_NUM)) {
                        }
                        else
                          $row_rate = "-";
                        echo "<tr class='rowL".$i."'><td class='text-center'>" .$i. "</td><td>&nbsp;<a href='details.php?no=".$row_list[0]."'>". $row_list[1] ."</a></td><td class='text-center' id='end".$i."'>". $row_list[2] ."</td><td class='text-center' id='now".$i."'>". $row_list[3] ."</td><td class='text-center'><button type='button' class='btn btn-default' id='plus".$i."'><span class='glyphicon glyphicon-plus'></span></button></td><td class='text-center'>". $row_list[4] ."</td><td class='text-center'> ".$row_rate[0]." </td></tr>";
                        echo "<input type='hidden' id='seriesID".$i."' value='" .$row_list[0]."'>";
                      }
                   ?>
            		</table>
            	</div>

            	<div id="plan" class="tab-pane well">
            		<table class="table table-condensed" style="width:90%" align="center">
              		<tr>
                		<th class="text-center">#</th>
                		<th class="text-center">Title</th> 
                		<th class="text-center">No.Ep</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Add to List</th>
              		</tr>
                          
                  <?php
                    $sql_plan = "SELECT SName,SEp,plan.SID FROM series,plan WHERE plan.userName = '".$row['userName']."' AND plan.SID = series.SID";
                    $result_plan = mysql_query($sql_plan,$con);
                    $j =0;
                    while($row_plan = mysql_fetch_array($result_plan,MYSQLI_NUM)){
                      $j++;
                      echo "<tr class='rowP".$j."'><td class='text-center'>" .$j. "</td><td>&nbsp;<a href='details.php?no=".$row_plan[2]."'>". $row_plan[0] ."</a></td><td class='text-center'>". $row_plan[1] ."</td><td class='text-center' ><button type='button' class='btn btn-default' id='remove".$j."'><span class='glyphicon glyphicon-remove'></span></button></td><td class='text-center'><button type='button' class='btn btn-default' id='add".$j."'><span class='glyphicon glyphicon-ok'></span></button></td></tr>";
                      echo "<input type='hidden' id='planID".$j."' value='" .$row_plan[2]."'>";
                    }
                  ?>

            		</table>
            	</div>

            	<div id="history" class="tab-pane well">
            		<table class="table table-condensed" style="width:90%" align="center">
              		<tr>
                		<th class="text-center">#</th>
                		<th class="text-center">Title</th> 
                		<th class="text-center">Ep</th>
                		<th class="text-center">Date</th>
              		</tr>

                  <?php
                    $sql_his = "SELECT SName,SEp,history.SID,HDate FROM series,history WHERE history.userName = '".$row['userName']."' AND history.SID = series.SID";
                    $result_his = mysql_query($sql_his,$con);
                    $k =0;
                    while($row_his = mysql_fetch_array($result_his,MYSQLI_NUM)){
                      $k++;
                      echo "<tr><td class='text-center'>" .$k. "</td><td>&nbsp;<a href='details.php?no=".$row_his[2]."'>". $row_his[0] ."</a></td><td class='text-center'>". $row_his[1] ."</td><td class='text-center'>".$row_his[3]."</td></tr>";
                    }
                  ?>

            		</table>
            	</div>
          	</div>
					</div>
      	</div>
			</div>
		</div>
  </body>
</html>
