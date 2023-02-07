<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login Buku Tamu</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Login </h2>


            <!-- Icon -->
            <div class="fadeIn first">
                <h2>Buku Tamu</h2>
            </div>
            <div class="fadeIn first">

                <img src="img/login.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="login-proses.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <button type="submit">Login</button>
                <h5>Created By PklMRC January Gumelar XII RPL 2</h5>
            </form>




        </div>
    </div>

</body>

</html>