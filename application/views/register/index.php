<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Todos os Cadastros</h1>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                                <li class="breadcrumb-item active">Todos os Cadastros</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ol class="breadcrumb float-sm-right">
                                <a class="btn btn-primary" href="<?php echo base_url('register/modulo'); ?>" role="button">Novo Cadastro</a>
                            </ol>
                        </div>                        
                    </div>
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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $users = $this->ion_auth->users()->result();
                            foreach ($users as $key => $value) {
                                if ($value->phone != 0) { ?>
                                    <tr>
                                        <td><?php echo $value->first_name; ?></td>
                                        <td><?php echo $value->phone; ?></td>
                                        <td><a href="<?php echo base_url('register/modulo/'.$value->id);?>"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                            <?php }
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>