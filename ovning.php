<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>


    <?php
    if(!empty($_REQUEST['username']) && !empty($_REQUEST['password'])){
    $id = $_REQUEST['username'];
    $pass = $_REQUEST['password'];

    if($id == "1234"){
        if($pass == "1234"){

            echo "<h2>Du är inloggad!</h2>";
        }
    }
    }
    ?>

    <form id="login" action="ovning.php" method="post">
    <h1>Log In</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Username" autofocus required>
        <input id="password" type="password" placeholder="Password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
        <a href="">Forgot your password?</a><a href="">Register</a>
    </fieldset>
    </form>

    <?php

    ?>




</body>

</html>
