<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign up.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign up</title>
</head>

<div class="one" id ="singUp">


    <h1>Sign up</h1>

    <form action="login.php"method="post">
        <div class="two">
            <label for="Name">Name:</label><br>
            <input type="text" id="firstName" name="firstName" required placeholder="Name">
            <i class='bx bxs-user'></i><br>
        </div>
        <div class="two">
            <label for="First Name">First Name:</label><br>
            <input type="text" id="lastName" name="lastName" required placeholder="First Name">
            <i class='bx bxs-user'></i><br>
        </div>
        <div class="two">
            <label for="Email">Email:</label><br>
            <input type="text" id="email" name="email" required placeholder="Email">
            <i class='bx bx-envelope' ></i><br>
        </div>
        <div class="two">
            <label for="Password">Password:</label><br>
            <input type="Password" id="password" name="password" required placeholder="Password">
            <i class='bx bx-lock-alt'></i><br>
        </div>
        
        <button type="submit" class="button" value="Sign Up" name="signUp"> sing UP</button>
        <div class="register">
            <a href="Log in.html" class="four">I  Have account</a>
        </div>
    </form>


</div>

<body>

</body>

</html>