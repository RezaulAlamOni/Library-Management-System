<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/admin.css">
		<title>Online Library</title>
	</head>
    <style>
        h1 {
	      font-size: 55px;
          font-family:cursive;
	      margin: auto;
          color:green;
        }
        body {
            
	        color: teal;
	        text-align: center;
            font-size: 30px;
            
        }

        input {
        font-size: 20px;
        }

        input:hover {
	       color: black;
	       transition: 1s;
        }
        table{
            text-align: center;
        }
        a{
            font-size: 25px;
        }
        img{
            height: auto;
            width: 350px;
        }
        marquee{
            color: navy;
            background-color:aquamarine;
            font-family:fantasy;
            font-size: 24px;
            position:inherit;
            border-top: 3px black;
            margin: auto;
        }
        div{
            text-align: center;
        }
        input{
            border-radius: 4px;
        }
        input:hover {
           background:gray;
	       color: black;
	       transition: .01s;
        }
    
    </style>
	<body>
        <img src="IMAGES/download.jpg" />
		<h1>Please Enter your Username & Password </h1>
		<form action="admin_verify.php" method="POST">
				
				<table>
					<tr>User ID: <input type="text" name="USER" placeholder="Username"
							autofocus required 
							>
				    </tr><tr>
						    Password : <input type="password" name="PASS" placeholder="Password"
							autofocus required>
                    </tr><tr><input type="submit" value="Login" ></tr><br>
				</table>
            <a href="registration.php">New Admin Registration </a>
			</form>
        <div>
        
            
            
        </div>
        <div class = "tag">
		<marquee 
				scrollamount= "15"
				onmouseover = "this.stop()"
				onmouseout = "this.start()">
				Please Enter your valid user id or password !! If you have no use id or password please click to New Admin Registration !!!!
		</marquee>
	</div>
	</body>
</html>
