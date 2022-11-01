
<?php

session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli("localhost","root","","altiemedia");


?>	

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/AltieMedia.png">
<title>Multimedia | Inventory</title>


<!-- Bootstrap -->
	
<link href="css/style.css" rel="stylesheet">
<style>

	body {
		  background: url(img/grey.jpg) no-repeat fixed;
		  -webkit-background-size: 100% 100%;
		  -moz-background-size: 100% 100%;
		  -o-background-size: 100% 100%;
		  background-size: 120% 100%;
		}
	
	
	
</style>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div class="container">
	<div class="row">
	<div class="center">
	<div class="login">
			
			
			
			<form role="form" action="" method="post">
			<link rel="stylesheet" href="css/style.css">
			<center>
			<h3> Multimedia Information</h3>
			</center>
			<br>
				<div class="form-group">
				
				 
					<input type="text" name="username"  class="form-control" placeholder=" Username" required autofocus />

				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder=" Password" required autofocus />
				</div>
				<div>
					<!--

					<select name="level" class="form-control" required  />
						<option value="">Pilih Bagian User</option>
						<option value="superadmin">Developer</option>
						<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>

					
					</select>
-->
				</div>
				<div>
					<br>
				<div class="form-group">
						
					<input type="submit" name="login" class="btn btn-round btn-success btn-block" value="Login" />
					
				</div>
				
					<br>
		
			</form>
			
		</div>
	
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

				$username = $_POST['username'];
				$password = md5($_POST['password']);
				$login = $_POST['login'];
				
				
				if ($login) {
					
					$sql = $koneksi->query("select * from users where username='$username' and password='$password'");
					$ketemu = $sql->num_rows;
					$data = $sql->fetch_assoc();
					
					if ($ketemu >=1) {
						session_start();
						
						if ($data['level'] == superadmin ) {
							$_SESSION['superadmin'] =$data[id];
							
							header("location:index3.php");
						}
						else if ($data['level'] == admin ) {
							$_SESSION['admin'] =$data[id];

							
							header("location:index.php");
						}
						else if ($data['level'] == petugas ) {
							$_SESSION['petugas'] =$data[id];
							
							header("location:index2.php");
						}	
					}
					else {
						echo '<center>
						<div class="alert alert-danger"> Login failed. Please try again</div></center>';
					
					}
				}
				
				
			?>
		
							



















































































							]







































































































































































































































































































































































































































































































































































































































































							