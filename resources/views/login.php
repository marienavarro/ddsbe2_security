<!Doctype html>
<html>
<head>
    <title>Login</title>
    <style>
         .container {
            width: 500px;
            margin-left: 30%;
            margin-top: 10%
        }
        .form-container input[type=text], .form-container input[type=password] {
            width: 90%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        .form-container .btn {
            background-color: black;
            color: white;
            padding: 16px 20px;
        	margin-left: 35%;
            border: none;           
            width: 30%;
            margin-bottom:10px;
            opacity: 0.8;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <form action="validate" class="form-container" method="post">
        <h2 style="text-align: center;">LOGIN</h2>

        <label><b>Username</b></label>
        <input type="text" placeholder="Please enter username" name="username" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Please enter password" name="password" required>

        <input type="submit" class="btn" value="Login">
                        
    </form>
    </div>       
</body>
</html>