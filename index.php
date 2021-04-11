<html>
	<head>
		<style type="text/css">
			* {
				padding: 0px;
				margin: 0px;
				font-family: sans-serif;
			}
			body {
				background-size: 1500px 930px;
			}
			.container {
				text-align: center;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				width: 100%;
			}
			.container span{
				color: white;
				text-transform: uppercase;
				display: block;
				border-radius: 100px;
				font-family: times; 
				cursor: pointer;
			}
			.text1 {
				font-size: 90px;
				font-weight: 700;
				letter-spacing: 30px;
				margin-bottom: 20px;
				position: relative;
				animation: text 5s 1;
			}
			.text2 {
				font-size: 30px;
				font-family: monospace;
				letter-spacing: 40px;
				animation: 2s 1;
				margin-bottom: 0px;
				background-color: black;
			}
			@keyframes text {
				0% {
					color: darkcyan;
					margin-bottom: -1000px;
					letter-spacing: 70px;
				}
				30% {
					letter-spacing: 50px;
					margin-bottom: 100px;
					color: chartreuse;
				}
				50% {
					letter-spacing: 8px;
					margin-bottom: -20px;
					color: orange;
				}
				60% {
					//color: purple;
				}
				70% {
					color: orange;
				}
				80% {
					//color: blue;
				}
				90% {
					//color: red;
				}
				95% {
					color: yellow;
				}
				100% {
					//color: yellow;
				}
			}
			.text3 {
				
				animation: text 4s 1;
				letter-spacing: 10px;
				background-color: darkcyan;

			}
			.text3:hover {
				background-color: #666;
			}
			html {
				cursor: pointer;
				scroll-behavior: smooth;
			}
			a {
				font-weight: 100px;
				text-decoration: none;
			}


		</style>
		</head>
		<body background="images/IMG_20190722_140438.jpg">
			<div class="container">
				<span class="text1">Welcome to</span>
				<span class="text2">Leo College</span>
				<a href="front.php"><span class="text3">Explore ➜</span></a>
			</div>

		</body>
</html>