<style>
.container{
	display: flex;
	align-items : center;
	justify-content: center;
	
	height: 100%;
}
</style>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width , initial-scale=1.0">
				<!-- load bootstrap css -->
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
					<!-- load jquery and bootstrap js -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/popper.min.js"></script>
					<script src="assets/js/bootstrap.js"></script>
					
				</head>
<body>
<body background = "download.jfif">
<div class = "container">
<div class="card col-sm-4">
<b><h1 align = "center"><font face="Brush Script MT" size="100%" color = "#8A2BE2">Login Siswa</font></h1></b>
<div class="card-body">
<form method="POST" action="biodata.php">
<font face = "Inconsolata" color = "#8A2BE2">Username :</font><input type="text" name="id" class="form-control" placeholder = "Input Username"><br>
<font face = "Inconsolata" color = "#8A2BE2">Password :</font><input type="password" name="pass" class="form-control" placeholder = "Input Password"><br>
<button type = "submit" name = "submit" class = "btn btn-outline-success btn-block" value="login" align="center">Login</button>
</div>
</div>
</div>
</form>
</body>
</html>