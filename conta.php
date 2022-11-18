<?php
include("conexao.php");
include("protect.php");

$id = $_SESSION['id'];

if (isset($_POST['nome'])) {
    if(strlen($_POST['nome']) > 0) {
        $nome = $_POST['nome'];

        $sql_code_nome = "UPDATE usuario SET NomeCompleto = '$nome' WHERE ID = '$id'";
        $sql_query_nome = $mysqli->query($sql_code_nome) or die("Falha na execução do código SQL: " . $mysqli->error);
    }
}
if (isset($_POST['cpf'])) {
    if (strlen($_POST['cpf']) > 0) {
        $cpf = $_POST['cpf'];
    
        $sql_code_cpf = "UPDATE usuario SET cpf = '$cpf' WHERE ID = '$id'";
        $sql_query_cpf = $mysqli->query($sql_code_cpf) or die("Falha na execução do código SQL: " . $mysqli->error);
    }
}
if (isset($_POST['email'])) {
    if (strlen($_POST['email']) > 0) {
        $email = $_POST['email'];
    
        $sql_code_email = "UPDATE usuario SET email = '$email' WHERE ID = '$id'";
        $sql_query_email = $mysqli->query($sql_code_email) or die("Falha na execução do código SQL: " . $mysqli->error);
    }
}
if (isset($_POST['telefone'])) {
    if(strlen($_POST['telefone']) > 0) {
        $telefone = $_POST['telefone'];
    
        $sql_code_telefone = "UPDATE usuario SET telefone = '$telefone' WHERE ID = '$id'";
        $sql_query_telefone = $mysqli->query($sql_code_telefone) or die("Falha na execução do código SQL: " . $mysqli->error);
    }
}

if (isset($sql_code_nome) || isset($sql_code_cpf) || isset($sql_code_email) || isset($sql_code_telefone)) {
    header("Location: home_page.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="assets/img/1936905_computer_device_mac_pc_work_icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style/style_pagina_cadastro.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Seu Perfil</title>
</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="assets/img/1936905_computer_device_mac_pc_work_icon.png" class="img" width="35" height="35" alt="" right="700px"> GPWORKSMD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home_page.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contato.php">Suporte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="conta.php">Minha Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Sair</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="container py-5 h-100">
        <div class="row no-gutters d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row no-gutters">

                        <div class="col-md-7 col-lg-10 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST">

                                    <div class="d-flex align-items-center  pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Sua Conta</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3 px-3" style="letter-spacing: 1px;"> Faça uma alteração na sua conta a seu critério:</h5>


                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form2Example27">Nome Completo:</label>
                                        <input placeholder="Digite seu nome completo" type="text" name='nome' id="nome" class="form-control form-control-lg "/>
                                        
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form2Example17">CPF:</label>
                                        <input placeholder="Digite seu CPF" type="text" name='cpf' id="CPF" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form2Example27">Email:</label>
                                        <input placeholder="Digite seu Email" type="email" name='email' id="Email" class="form-control form-control-lg " />
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form2Example27">Telefone:</label>
                                        <input placeholder="Digite seu telefone" type="tel" name='telefone' id="Telefone" class="form-control form-control-lg " />
                                    </div>
                                    <br>
                                    <div class="pt-1 mb-3">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Concluir</button>
                                        <a href="home_page.php"><button class="btn btn-dark btn-lg btn-block" type="button">Voltar</button>
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>