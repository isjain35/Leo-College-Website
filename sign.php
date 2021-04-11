<html>
	<head>
		<title>signing page</title>

		<style>
			layer {
			 	background-color: lightblue;
				text-align: center;
				height: 100px;
				width: 300px;
				margin-top: 200px;
				margin-left: 410px;
				padding: 100px;
				opacity: 0.90;
				border-bottom-left-radius: 150px;
				border-top-right-radius: 150px; 
			}
			label {
				font-size: 30px;
			}
			input {
				border-radius: 15px;
				height: 40px;
				width: 200px;
				text-align: center;


			}
			body {
				text-align: center;
				background-color: white;
				background-image: url(images/front.jpg);
				background-repeat: no-repeat;
			}
				
		</style>
	</head>
	<body>

		<layer>
			<form method="POST" action="valid.php">

				<label>Authentication Code</label>
				<input type="password" placeholder="Input your authentication code" name="code" required="on" maxlength="4" minlength="4"><br>
				<input type="submit" value="Go>" style="margin-top: 70px; margin-left: 310px; height: 40px; width: 60; font-family: monospace; font-size: 25px; background-color: darkgrey;">

				
			</form>
		</layer>
	</body>
</html>