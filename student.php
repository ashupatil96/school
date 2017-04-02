<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\student.css">
	</head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="Bcss/bootstrap.min.css">
          <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="Bjs/bootstrap.min.js"></script>
        <?php
        		session_start();
          echo $_SESSION["id"];
          echo $_SESSION["password"];
        ?>


      Welcome MR. <?php echo  $_SESSION["id"]; ?>


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              
              <a class="navbar-brand" href="logIn.php">Homepage</a>
            
          </div>



          <ul class="nav navbar-nav">
              <li class="active"><a href="homework.php">Homework</a></li>
              <li><a href ="studentTimeTable1.php">TimeTable</a></li>
              <li><a href ="result.php">Result</a></li>
              <li><a href ="news.php">News</a></li>
              <li><a href="notification.php">Notifaction</a></li>
              <li><a href="editStudent1.php">Edit Profile</a></li>
              <li><a href="letterStudent1.php">Leave/Complain Letter</li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
              <li><a href="profile.php"><span class="glyphicon glyphicon-edit"></span> Complete Profile</a></li>
             
          </ul>
            
      </div>

    </nav>

  

  </html>
