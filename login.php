<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Neon Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">
        <form method="post" action="login_action.php">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" placeholder="Username"  name="Username"
                required>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" placeholder="Password" name="Password"
                required>
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Pasword?</a>
            </div>
            <button type="submit" value="LOGIN">Login</button>
            <div class="register-link">
                <p>Dont Have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>