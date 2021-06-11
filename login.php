<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link  rel="stylesheet"type="text/css"href="gaya.css" >
	<title> Login </title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
	
</head>


<body >
	<main>
		<form method="POST" action="aksi_login.php">
			<table class="da">
				<tr>
					<td><h1 class ="login">Login </h1></td>
				</tr>
				
				<tr>
					<td>
						<label for="">Username :</label>
						<br>
						<input required name ="username" type="text" placeholder="your Username"class="input"></input>
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Password :</label>
						<br>
						<input required name ="password"  type="password" placeholder="your Password"class="input"></input>
					</td>
					
				</tr>
				
				<tr>
					<td >
						<input type="submit" value="login" class="in">
					</td>
					<td>
						<a href="register.html"class="in">
						Register
						</a>
					</td>
				</tr>
				
			</table>
		</form>
	</main>
</body>
<footer>
	<p>&copy; 2021 PW4 All Rights Reserved.</p>
</footer>
</html>