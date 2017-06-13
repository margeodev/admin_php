<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
    unset($_SESSION['user_name'], $_SESSION['access_level']);
?>
<div class="container">

    <form class="form-signin" action="validate_login.php" method="post">
        <h2 class="form-signin-heading text-center">Área para Usuário Cadastrado</h2>
        <label for="user" class="sr-only">Usuário</label>
        <input type="text" name="user" id="user" class="form-control" placeholder="Digitar o Usuário..." required autofocus> <br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Digitar a senha..." required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
    </form>

    <p class="text-center text-danger">
        <?php
            if(isset($_SESSION['loginError'])){
                echo $_SESSION['loginError'];
                unset($_SESSION['loginError']);
            }
        ?>
    </p>
</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
