<?php
  include('layout_manager.php');
  include('content_function.php');
?>
<html>
<head><title>Online Question Answer Platform</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet"/>
<body>
   <div class="pane">
      <div class="header"><h1><a href="/forum-tutorial"><h2>ONLINE QUESTION ANSWER PLATFORM</a></h1></div>
	  <div class="loginpane">
          <?php 
		       session_start();
		      if(isset($_SESSION['username']))
			  {
				  logout();
				  
			  }	else{
				  if(isset($_GET['status'])){
					  if($_GET['status'] =='reg_success'){
						  echo "<h1 style='color: green;'>Registered Successfully!</h1>";
					  }else if($_GET['status'] == 'login_fail') {
						  echo "<h1 style='color: red;'>invalid username or password</h1>";
					  }
				  }
				  /*loginform();*/
			  }		  
		  ?>
	  </div>
	  <div class="forumdesc">
	  <body bgcolor="litegreen">
	   <h2><p><h2 style='color:red;'>WELCOME TO THE ONLINE DISCUSSION TABLE</P></h2>
      </div>
      <div class="content">
           <?php dispcategories(); ?>
      </div>
   </div>	  
</body>
</html>