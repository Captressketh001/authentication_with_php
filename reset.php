<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <main>
        <div class="container">
            <h2>Reset Password</h2>
            <div>
                <form action="reset_form.php" method="POST">
                <label for="email">Email</label>
                    <div>
                        <input type="email" name="email" id="email" required>
                    </div> <br>
                    <label for="password">New Password</label>
                    <div>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <br>
                    <input type="submit" value="Reset Password" name="submit">
                </form>
                
            </div>
        </div>
    </main>
</body>
</html>