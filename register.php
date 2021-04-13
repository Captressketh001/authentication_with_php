<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    .container{
        display: grid;
        justify-content: center;
    }
</style>
<body>
    <main>
        <div class="container">
            <h1>Register</h1>
            <div>
                <label for="fname">First Name</label>
                <div>
                    <input type="text" name="fname" id="fname">
                </div>
                <label for="lname">Last Name</label>
                <div>
                    <input type="text" name="lname" id="lname">
                </div>
                <label for="email">Email</label>
                <div>
                    <input type="email" name="email" id="email">
                </div>
                <label for="password">Password</label>
                <div>
                    <input type="password" name="password" id="password">
                </div>
                <label for="conf_password">Confirm Password</label>
                <div>
                    <input type="password" name="c_password" id="c_password">
                </div><br>
                <input type="button" value="Register">
            </div>
        </div>
    </main>
</body>
</html>