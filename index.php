<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Log in.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Log in</title>
</head>

<body>




    <div class="one" id="signIn">
        <h1>Login</h1>

        <form action="login.php" method="post" >
            <div class="two">
                <label for="Email">Email:</label><br>
                <input type="text" id="email" name="email" required placeholder="email">
                <i class='bx bxs-user'></i><br>
            </div>
            <div class="two">
                <label for="Password">Password:</label><br>
                <input type="password" id="password" name="password" required placeholder="Password">
                <i class='bx bx-lock-alt'></i><br>
            </div>
            <button type="submit" class="button" value="Sign In" name="signIn">sing in</button>
            <div class="register">
                <a href="inscription.php"class="four" >I Don't Have account</a>
            </div>
        </form>


    </div>



</body>

</html>