<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login to Let's API</title
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login Page of Let's API">
    <meta name="keywords" content="Login">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Login to Let's API">
    <meta property="og:description" content="Login Page of Let's API">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="../../handler/css/style.css?v=<? echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    
</head>

<body class="background bulat1 bulat2 one-viewport-page">

    <a class="back" href="../../"><img src="../../src/arrow.png" alt="back"></a>

    <div class="login-container">
        <div class="login-box">

            <h2>Login</h2>
            <div class="img-input">
                <img src="../../src/user.png" alt="user">
                <div class="wrapper-login">
                    <input class="search" placeholder="Username" type="text" required>
                </div>
            </div>

            <div class="img-input">
                <img src="../../src/key.png" alt="user">
                <div class="wrapper-login">
                    <input class="search" placeholder="Password" type="password" required>
                </div>
            </div>
            <a class="forgot-password" href="#">Forgot Password</a>

            <button>Signin</button>
            <p>Dont have an account yet? <a href="./register.php">Signup</a></p>

        </div>

    </div>

</body>

</html>