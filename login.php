<html>
	<head>
	<style>
		body{
			background:url(background33.jpg);
			background-size:cover;
			margin:0;
		}
		input{
			width:70%;
			outline:none;
			padding:9px 10px;
			boder:1px #aaa solid;
			font-size:15px;
			background:#fff;
			display:block;
			margin:20px auto;
		}
		#login{
			background:#19b1ca;
			color:#fff;
			border:none;
		}
		div{
			width:30%;
			height:400px;
			background:rgba(0,0,0,.2);
			box-shadow:5px 4px 43px #000;
			position:absolute;
			top:80px;
			left:500px;
		}
		form{
			margin:30px auto;
			text-align:center:
		}
		b{
			font-size:25px;
			color:yellow;
		}
		a{
			color:red;
		}
		img{
		display:block;
		margin:=75px auto 0 auto;
		}
	</style>
	
	</head>
	<body style="text-align: center">
	<p style="color:red;font-size: 25px;padding-top: 30px;">WELCOME TO THE ONLINE DISCUSSION TABLE</P>
		<div>
			<form  style="text-align: center" action="/forum-tutorial/validatelogin.php"method="post">
				<b >Login Form</b>
				<input type="text" name="usernameinput" value="" placeholder="Email or Username" id="usernameinput" required/>
				<input type="password" name="passwordinput" value="" placeholder="Password" id="passwordinput" required/>
				<input type="submit" name="submit" value="LOGIN" placeholder="login" />
				<?php if(isset($_GET['status'])){
					  if($_GET['status'] =='reg_success'){
						  echo "<h1 style='color: green;'>Registered Successfully!</h1>";
					  }else if($_GET['status'] == 'login_fail') {
						  echo "<h1 style='color: red;'>invalid username or password</h1>";
					  }
				  } ?>
				<a href="register.html">REGISTER</a>
			</form>
		</div>
	</body>
</html>