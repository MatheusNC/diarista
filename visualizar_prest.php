<?php
    include("conexao.php");

    $consulta = "SELECT * FROM usuario WHERE tipoUsuario = 'PrestadorServico'";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="assets/img/1936905_computer_device_mac_pc_work_icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <!-- CSS only -->
    <link rel="stylesheet" href="assets/style/visualizar_prest.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->


    <!-- CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/styles/style_avaliacao.css" media="screen"> -->

    <!-- Titulo -->
    <title>Visualizar Prestador(a)</title>
</head>

<!-- corpo do projeto -->

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
    </nav><br>

    <h1 class="form-group mt-3 fs-2" style="text-align:center"> Visualize os prestadores Disponíveis</h1>
    <h4 class="form-group mt-3 fs-2" style="text-align:center"> Clique no nome da pessoa para visualizar os dias e horários disponíveis</h4>


    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dado = $con->fetch_array()) {?>
                <tr>
                    <td><?php echo $dado["ID"]; ?></td>
                    <td><a href="agendar_prest.php?ID=<?php echo $dado["ID"]; ?>"><?php echo $dado["NomeCompleto"]; ?></a></td>
                    <td><?php echo $dado["telefone"]; ?></td>
                    <td><?php echo $dado["email"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>