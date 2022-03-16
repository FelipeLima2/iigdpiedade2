

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
                      <h3 class="card-title">O choro pode durar uma noite, mas a alegria vem pela manhã.
-- Salmos 30:5</h3>
                    </div>
                  </div>
              </div>
              
                <div class="card-body">
                  
                  <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                      <div class="form-check">
                        
                        <label class="form-check-label" for="cadastroinicial">
                        A alegria de Deus é eterna, a tristeza não!

Às vezes a tristeza parece simplesmente grande de mais para aguentar. Enfrentamos tantas lutas que acabamos ficando desanimados.

Mas a boa notícia é que a sua tristeza vai ter um fim, sim! Ela pode durar um pouco, mas Deus vai devolver a sua alegria. É promessa d'Ele.

E melhor ainda, quando você chegar no céu, toda tristeza vai acabar de vez e todos os seus sofrimentos vão se transformar em grande alegria!
                        </label>
                      </div>
                    </div>
                    </div>
                  </div>

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

  