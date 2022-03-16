
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-sm-6">
            <h1 class="text-center"> Bem-vindo</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <?php
    errosValidacoes();
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
            
    }
    ?>
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <!-- left column -->
          <div class="col-md-9">
            <div class="card card-primary shadow mb-4 elevation-3">
              <div class="card-header">
                
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <h3 class="card-title">Cadastro Simples</h3>
                    </div>
                  </div>
              </div>
              <form method="post" action="<?php echo base_url('welcome/core'); ?>">
                <div class="card-body">
                  <div class="row justify-content-md-center">
                    <div class="col-5">
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone com DDD">
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="dtnascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dtnascimento" name="dtnascimento" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cadastroinicial" name="cadastroinicial">
                        <label class="form-check-label" for="cadastroinicial">Primeira Vez</label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="row justify-content-md-center mb-3">
                    <div class="col-md-auto">
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                      </div>
                    </div>
                  </div>

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 