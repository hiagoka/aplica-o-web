<?php 
    session_start();

// não deixar a pessoa entrar caso o POST esteja vazio

   if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){ 
   
        print "<sript>location.href=index.php; </script>";
   }

   include ('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

// exigir que para acessar, a senha e usuario devem ser o mesmo digitados anteriormente($usuario e $senha)

    $sql = "SELECT * FROM usuarios 
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

// criar variavel que executa conexão $conn com a query (consulta) 

    $res = $conn->query($sql);

    $row = $res->fetch_object();




/// resultado executa um numero de linhas (num rows) 

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
        print "<script>location.href='dashboard.php';</script>";
    }else{
        print "alert Usuario/senha incorret(o)s";
        print "<script> location.href='index.php'; </script> ";
    }
?>