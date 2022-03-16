<!DOCTYPE html>
<html>

<title>IIGDPiedade2 | Login </title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/login/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/login/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/Login-Form-blue-Gradient-1.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/Login-Form-blue-Gradient.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/styles.css'); ?>">
</head>

<body>
    <section>
        <div class="lgp-hd">
            <h2 data-aos="zoom-in"><strong>IGreja internacional da Graça</strong></h2>
            <h5 data-aos="zoom-out"><strong>Piedade 2</strong></h5>
        </div>
        <div class="container login-cont">
            <div class="row">
            <?php 
            errosValidacoes(); 
            if ($this->session->flashdata('erro') != ''){
                echo '<div class="container-fluid alert alert-danger alert-dismissible d-flex justify-content-center my-1 fade show" role="alert">
                        <div></div>
                        <div><strong>'.$this->session->flashdata('erro').'</strong></div>
                        <div class="justify-content-center">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    </div>';
            }elseif($this->session->flashdata('sucesso') != ''){
                echo '<div class="container-fluid alert alert-success alert-dismissible d-flex justify-elements-around my-1 fade show" role="alert">
                        <div></div>
                        <div><strong>'.$this->session->flashdata('sucesso').'</strong></div>
                        <div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    </div>';
            }
            ?>
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col" data-aos="flip-up"><i class="icon ion-lock-combination" data-aos="fade" data-aos-duration="100" data-aos-delay="200"></i>
                    <form class="login-form" method="post">
                    <div class="form-group"><input class="form-control form-control-lg lg-frc" type="text" id="cpf" name="cpf" placeholder="Enter User ID"></div>
                    <div class="form-group"><input class="form-control form-control-lg lg-frc" type="password" id="senha" name="senha" placeholder="Enter Password"></div>
                    <div class="form-group"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Login</strong></button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url('assets/login/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/js/bs-init.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>