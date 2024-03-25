<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halmaan Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><div class="login-box">
<h1>E - Ticketing</h1>
    <h4>Login Akun</h4>
    <img src="avatar.jpg" class="avatar">
    <form action="process.php" method="post">
        <input type="text" name="username" id="username" class="form_control" placeholder="Username"> <br> <br>
        
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" class="form_control" placeholder="Password"> <br> <br>

        <input type="submit" name="submit" value="login">
    </form>
</div>
</body>
</html>