<?php  
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light" >
        <div class="container-fluid">
            <a class="navbar-brand">Sistema X</a>
            <?php
            print"ola " . $_SESSION["nome"];
            print "<a href='logout.php' class='btn btn-danger'>Sair</a>"; 
            ?>

        </div>
    </nav>
    oi
</body>
</html>