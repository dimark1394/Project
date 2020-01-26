<!--<html>-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form name="login_form" method="POST" action="login.php">-->
<!--Username: <input type="text" name="username"><br>-->
<!--Password: <input type="password" name="password"><br>-->
<!--<input type="submit" value="Login">-->
<!--</form>-->
<!---->
<!---->
<!---->
<!--</body>-->
<!--</html>-->


<!DOCTYPE html>
<html lang="en">
<title>log in screen</title>

<head>
    <meta name="viewport" http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" href="loginform.css">
</head>

<body background="images/patras.jpg">

<h1>Welcome to our site!</h1>

<div class="log">
    <form name="login_form" method="POST" action="login.php" >
        Username:
        <input type="text" name="username" placeholder="username" id="username">
        <br><br>
        Password:
        <input style="margin-left: 4px" type="password" name="password" placeholder="password" id="password" a>
        <br><br>
        <input type="submit" value="Login">
    </form>

</div>

</body>

</html>