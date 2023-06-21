<html>
	<head>
		<title>admin</title>
		<style>
			.uname
			{
				width:300px;height:40px;
				background-color:#ccc;
				font-size:20px;
				margin:
			}
			.outer
			{
				width:500px;
				height:250px;
				background-color:white;
				margin:200px auto;
				padding:20px 0px 0px 40px #ccc;
				box-sizing:border-box;
			}
			</style>
	</head>
<body>
	<form action="home.php" method="get" class="outer">
		<b>UserName</b><br> 
		<input type="text" name="inputname" class="uname">
		<br><br>
		<b>Password</b><br>
		<input type="password" name="password" class="uname">
		<br><br><br>
		<input type="submit" value="Login" style="margin-left:100px;">

	</form>
</body>



</html>