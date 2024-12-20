<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="controllers/login.php" method="POST">
        <label for="userName">user Name</label>
        <input name="userName" type="text" placeholder="user Name">
        <label for="password">password</label>
        <input name="password" type="password" placeholder="password">
        <label for="remember_me">
            <input type="checkbox" name="remember_me" id="remember_me"> Remember Me
        </label>
        <button name="login" style="background:green;">login</button>

        
    </form>

</body>
</html>