<html>
<head>
    <title>Login page</title>
    <style>
        .login{
            width: 50%;
            height: 30%;
            border: 2px solid white;
            background-color: #ffb4f6;
            margin: auto;

        }
        .footer{
            width: 50%;
            height: 70%;
            border: 2px solid white;
            background-color: #7e7f81;
            margin: auto;
        }
        .text{
            text-align: center;
            font-size: 70px;
            color: white;
        }
        .text1{
            text-align: center;
            font-size: 30px;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <div class="login">
   <h1 class="text"> LOGIN </h1>
    </div>
</header>
<footer>
<form >
    <div class="footer">
        <label class="text1">username :</label>
        <input name="login-username" placeholder="username">
        <br/>
        <br/>
        <label class="text1">password :</label>
        <input name="login-password" placeholder="password">
        <br/>
        <br/>
        <button>Login</button>
        <br>
        <br>
    <button>Cancel</button>
    </div>
</form>
</footer>
</body>
</html>