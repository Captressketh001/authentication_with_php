<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <main>
        <div class="container">
            <h2>Register</h2>
            <div>
                <form method="POST" action="submit-form.php">
                    <label for="fname">First Name</label>
                    <div>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <label for="lname">Last Name</label>
                    <div>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                    <label for="email">Email</label>
                    <div>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <label for="password">Password</label>
                    <div>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <br>
                    <input type="submit" value="Register" name="submit">
                </form><br>
                Already have an account?<a href="login.php"> Login</a>
            </div>
        </div>
    </main>
</body>
</html>