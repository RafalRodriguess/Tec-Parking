<?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">
    <?php $this->load->view('layout/sidebar'); ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-users bg-blue"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo; ?></h5>
                                <span><?php echo $sub_titulo; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a title="ome" href="<?php echo base_url('/'); ?>" <i class=" ik ik-home"></i></a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a  class="btn btn-success"href="">+Novo </a>
                        </div>
                        <div class="card-body">
                            <table  class="table data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>                                      
                                        <th>Usuário</th>                                      
                                        <th>E-mail</th>
                                        <th>Nome</th>
                                        <th>Perfil de acesso</th>
                                        <th>Ativo</th>
                                        <th class="nosort">Ações</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($usuarios as $user) : ?>
                                    <tr>
                                        <td><?php echo $user->id; ?></td>
                                        <td><?php echo $user->username; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><?php echo ($this->ion_auth->is_admin($user->id) ? 'Admin' : 'Atendente') ?></td>
                                        <td><?php echo $user->first_name; ?></td>
                                        <td><?php echo $user->active == 1 ? '<span class="badge badge-pill badge-success mb-1">Sim</span>'  : '<span class="badge badge-pill badge-warning mb-1">Não</span>';?></td>
                                       <td class>
                                       <a data-toggle="tooltip" data-placement="bottom" title="Editar <?php echo $this->router->fetch_class();?>" href="<?php echo base_url('Usuarios/core/' . $user->id);?>"  class="btn btn-icon btn-primary"><i class="ik ik-edit-2"></i></a>
                                       <a data-toggle="tooltip" data-placement="bottom" title="Excluir <?php echo $this->router->fetch_class();?> " href="<?php echo base_url('Usuarios/core/' . $user->id)?>" class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></a>
                                        
                                       </td>
                                    </tr>
                                    <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?php echo date('Y') ?> </a> Todos os Direitos Reservados</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Desenvolvido por TecWeb <i class="fas fa-code"></i> <a href="https://tecwebdig.com.br/" class="text-dark" target="_blank">Sistemas</a></span>
    </div>
</footer>