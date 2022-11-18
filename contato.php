<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="assets/img/1936905_computer_device_mac_pc_work_icon.png">
    <title>Contato</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .wrapper {
            background: #000;
            background: url("assets/img/background.jpg");
            background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    width: 100%;
            
        }

        .overlay {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8)
        }

        .contact-us {
            margin-top: 50px;
             margin-bottom: 50px
        }

        .contact-us h3,
        p {
            color: #fff
        }

        .address {
            margin-top: 14px !important;
            margin-left: 10px;
            
        }

        .address span {
            color: #032d52
        }

        .icons {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            display: inline-block;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .icons i {
            font-size: 20px
        }

        .forms {
            padding: 20px
        }

        .inputs input {
            margin-bottom: 13px;
            border: none;
            border-bottom: 2px solid #eee
        }

        .inputs input:focus {
            margin-bottom: 13px;
            border: none;
            border-bottom: 2px solid #032d52;
            box-shadow: none
        }

        .inputs textarea {
            margin-bottom: 13px;
            border: none;
            border-bottom: 2px solid #eee;
            width: 100%;
            resize: none
        }

        .inputs textarea:focus {
            margin-bottom: 13px;
            border: none;
            border-bottom: 2px solid #032d52;
            box-shadow: none;
            resize: none
        }

        .form-control {
            padding: .375rem .25rem
        }

        .navbar-brand{
            text-align: left;
            position: relative;
            color: #fff;

            
            
        }

        .navbar{
background-image: linear-gradient(to left, #1ba4ff, #032d52);

}



.nav-item{
    font-size: large;
}

.form-group{
    font-size: larger;
    color: white;
}
    </style>
</head>

<body className='snippet-body'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="">
            <img src="assets/img/1936905_computer_device_mac_pc_work_icon.png" class="img" width="35"  height="35" alt="" right="700px"> GPWORKSMD
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
    <div class="wrapper">
        <div class="overlay">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="container">
                        <br>
        
                    <div class="contact-us text-center">
                    
                        <h3>Fale Conosco</h3>
                        <p class="mb-5">Tire suas dúvidas conosco. Complete o Formulário e envie sua pergunta ou dúvida.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-5 text-center px-3">
                                    <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i
                                        class="fa fa-envelope-o"></i></span>
                                <div class="address text-left"> <strong><span>Contato:</span></strong>
                                    <p>gustavo.agostinho2021@hotmail.com<br>matheus.mnc2002@gmail.com<br>douglas.oian@gmail.com<br>pepeu.zanchetta@hotmail.com</p>
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5 bg-white">
                                        <h5>Envie sua mensagem</h5>
                                        <div class="mt-4 inputs"> <input type="text" class="form-control"
                                                placeholder="Nome completo"> <input type="text" class="form-control"
                                                placeholder="Email"> <textarea class="form-control"
                                                placeholder="Escreva sua mensagem"></textarea> </div>
                                        <div class="button mt-4 text-left"> <button class="btn btn-dark">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'></script>
    <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function (e) {
            e.preventDefault();
        });</script>

</body>

</html>