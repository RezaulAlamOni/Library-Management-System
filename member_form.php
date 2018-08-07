<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/member.css">
		<title>Welcoma to Library</title>
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
        background: white;
        }
        img{
            height: auto;
            width: 350px;
        }
        input{
            border-radius: 4px;
        }
    
    </style>
	<body>
        <img src="IMAGES/library-2.jpg">
		<h1>User Login</h1>
		<form action="member_verify.php" method="POST">
				
				<table>
					<tr>
						<td>Department:<select name="USER">
                            <option >Enter Your Department</option>
                            <option name="USER">CSE</option>
                            <option name="USER">BBA</option>
                            <option name="USER">ECE</option>
                            <option name="USER">DIPLOMA</option>
                            </select>
						</td>
					</tr>
					
					<tr>
						<td>Password:<input
							type="password" 
							name="PASS"
							autofocus required
							>
						</td>
					</tr>

					<tr>
						<td><input 
							type="submit" 
							value="Login" 
						 	>
						</td>
					</tr>
				</table>
			</form>
	</body>
</html>