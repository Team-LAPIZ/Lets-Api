<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login to Let's API</title>
    <?php 
        include_once "../../handler/include/meta.php";
        importMeta("pages/movie/search.php", "../../handler/css/style.css", "Login", "Login Page of Let's API");
    ?>

</head>

<body class="background bulat1 bulat2 one-viewport-page">

    <a class="back" href="../../"><img src="../../src/arrow.png" alt="back"></a>

    <div class="login-container">
        <div class="login-box fadeIn">

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