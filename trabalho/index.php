<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: blanchedalmond;">
    <div class="login">
        <div class="container">
            <div class = " col-lg-3 offset-lg-4">

                <div class="card">
                        <div class = "card-body" id="cardspace">
                            <h3>Faça seu Login</h3>
                            <form  action="dashboard.php" method="POST"   class="formulario" >
                                
                                <label>Usuário:</label>
                                    <input type="text" name="user:" required class="form-control" id="space" > <br>

                                <label>Senha:</label>
                                    <input type="password" name="senha" required class="form-control" id="space" > <br>
                                    

                                <button type="submit" value="enviar" class= "btn btn-primary" ></a> >Logar</button>
                                
                            </form>
                        
                        </div>
                </div>
           </div>
        </div>
    </div>


    <footer>


    </footer>
    
</body>
</html>