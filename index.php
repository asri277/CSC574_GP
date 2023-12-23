<?php session_start()
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> SUNDAY COM | HOME</title>
	<style type="text/css">

	* {
  		margin: 0;
  		padding: 0;
  		font-family: sans-serif;

	}
	body{
		background-repeat: no-repeat;
		background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url(image/cinema3.jpg);
		background-size: cover;
		background-position: center;
	}

	.background{

	}
	.navbar{
		width: 87%;
		margin: auto;
		padding: 10px 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
		background-color: rgba(255, 255, 255, .05);
	}
	.logo{
		width: 300px;
		cursor: pointer;
		margin-bottom: 10px;
		margin-left: 30px;

	}
	.navbar ul li{
		list-style: none;
		display: inline-block;
		margin: 0 20px;
		margin-right: 36px;
		position: relative;
	}
	.navbar ul li a{
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
	}
	.navbar ul li::after{
		content: '';
		height: 3px;
		width: 0;
		background: #950101;
		position: absolute;
		left: 0;
		bottom: -10px;
		transition: 0.5s;
	}
	.navbar ul li:hover::after{
		width: 100%;
	}
	.content{
		width: 100%;
		position: absolute;
		top: 90%;
		transform: translateY(-50%);
		text-align: center;
		color: #FFFFCDD2;
		margin-top: 40px;
	}
	.box{
		position: relative;
		width: 200px;
		height: 200px;
		margin-left: 42%;
		transform-style: preserve-3d;
		animation: animate 20s linear infinite;
	}
	@keyframes animate{
		0%{
			transform: perspective(900px) rotateY(0deg);
		}
		100%{
			transform: perspective(900px) rotateY(360deg);
		}
	}
	.box span{
		position: absolute;
		top: 10%;
		left: 0;
		width: 100%;
		height: 100%;
		transform-origin: center;
		transform-style: preserve-3d;
		transform: rotateY(calc(var(--i) * 60deg)) translateZ(300px);
	}
	.box span img{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 150%;
		object-fit: cover;
		align-items: center;
	}
	</style>
</head>
<body>
	<div class="background">
		<div class="navbar">
			<img src="image/logo.png" class="logo">
			<ul>
				<?php
					if(!isset($_SESSION['username'])){
						echo '<li><a href="signup.php">Sign Up</a></li>';
            // nnti tukar untuk login punya part
						echo '<li><a href="login_option.php">Login</a></li>';
					}
					else{
						echo '<li><a title="Username" href="#">'.$_SESSION['username'].'</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					}?>
			</ul>
		</div>

		<div class="box">
			<span style="--i:1;"><img src="image/spiderman2.jpg" alt=""></span>
			<span style="--i:2;"><img src="image/encanto.jpg" alt=""></span>
			<span style="--i:3;"><img src="image/sing3.jpg" alt=""></span>
			<span style="--i:4;"><img src="image/scream.jpg" alt=""></span>
			<span style="--i:5;"><img src="image/residentevil.jpg" alt=""></span>
			<span style="--i:6;"><img src="image/matrix.jpg" alt=""></span>
		</div>
	</div>

	<div class="content">
			<h1>NOW SHOWING MOVIES</h1>
			<p>Book your tickets now by signing up as a member!</p>
		</div>

	<div style="
			margin-top: 24% ;
   		color: #C6C6C6;
   		text-align: center;
   		padding: 20px;
   		display: block;
   		">
  <p><b>Copyright &copy; 2021 Sunday Com. cubaan<b></p>
</div>
</body>
</html>
