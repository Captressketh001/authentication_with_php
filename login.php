<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <main>
        <div class="container">
            <h2>Login</h2>
            <div>
                <form action="login-form.php" method="POST">
                    <label for="email">Email</label>
                    <div>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <label for="password">Password</label>
                    <div>
                        <input type="password" name="password" id="password" required>
                    </div><br>
                    <input type="submit" value="Login" name="submit">
                </form><br>
                Don't have an account?<a href="register.php"> Register</a>
            </div>
        </div>
    </main>
</body>
</html>