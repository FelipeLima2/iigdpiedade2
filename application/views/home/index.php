  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content mt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Todos os Telefones</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Telefone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $users = $this->ion_auth->users()->result();
                    foreach ($users as $key => $value) {
                      if($value->phone!=0){?>
                    <tr>
                      <td><?php echo $value->first_name; ?></td>
                      <td><?php echo $value->phone; ?></td>
                    </tr>
                    <?php }} ?>
                    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
        
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
