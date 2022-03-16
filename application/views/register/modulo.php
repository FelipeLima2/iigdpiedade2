<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <?php errosValidacoes();
            getMsg('msgCadastro');
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
            }?>
                <div class="col-sm-6">
                    <h1><?php echo $titulo; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('register'); ?>">Todos os Cadastros</a></li>
                        <li class="breadcrumb-item active">Novo Cadastro</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?php echo base_url('register/core'); ?>">
                            <!-- usuário do banco -->
                            <?php if(isset($id_usuario)){ 
                                $users = $this->ion_auth->users()->result();
                                foreach ($users as $key => $value_user) {
                                    if ($value_user->id==$id_usuario) { ?>
                                <input type="hidden"  value="<?php echo $value_user->id; ?>" name="id_usuario">
                            <div class="card-body">
                                <?php if($value_user->email!=null){?>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Login</label>
                                            <input type="text" class="form-control" id="login" name="login" placeholder="Entre com um Login" value="<?php echo $value_user->email; ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma Senha Nova">
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome"  value="<?php echo $value_user->first_name; ?>"  placeholder="Digite um Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telefone</label>
                                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone com DDD"  value="<?php echo $value_user->phone; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="dtnasc" name="dtnasc" value="<?php echo $value_user->dtnascimento; ?>" >
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <?php }
                                    # code...
                                }
                                } else { ?>
                            <!-- usuário novo -->
                            <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Login</label>
                                            <input type="text" class="form-control" id="login" name="login" placeholder="Entre com um Login">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma Senha Nova">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite um Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telefone</label>
                                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone com DDD">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="dtnasc" name="dtnasc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- final usuário novo -->
                            <?php } ?>
                            

                            <div class="card-footer ">
                                <div class="row justify-content-md-center mb-3">
                                    <div class="col-md-auto">
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>