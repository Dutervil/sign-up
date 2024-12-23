<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container">
        <header>Sign-Up</header>
        <p>Youd don't have an account ? <a href="signup.php">Register</a></p>
        <div class="form-outer">
            <form method="post">
                <div class="slide">
                    <div class="title">Login Details :</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text" name="username" placeholder="stephen23">
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <div class="field btns">
                        <button type="submit" class="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="main.js"></script>
</body>

</html>