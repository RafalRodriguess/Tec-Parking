<?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">
    <?php $this->load->view('layout/sidebar'); ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?php echo $icone_view; ?>"></i>

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
                                    <a data-toogle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>" <i class=" ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a data-toogle="tooltip" data-placement="bottom" title="Listar <?php echo $this->router->fetch_class(); ?>" href="<?php echo base_url($this->router->fetch_class()); ?>">Listar &nbsp;<?php base_url($this->router->fetch_class()); ?></a>
                                </li>

                                <li data-toogle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> <?php echo (isset($usuario) ? '<i class="ik- ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . formata_data_banco_com_hora($usuario->data_ultima_alteracao) : ''); ?></div>

                    </div>
                    <!--  <div class="card-body">
                    <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nome</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Firstname" value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Sobrenome</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Lastname" value="<?php echo (isset($usuario) ? $usuario->last_name : set_value('last_name')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Usuário</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?php echo (isset($usuario) ? $usuario->username : set_value('username')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email (Login)</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo (isset($usuario) ? $usuario->email : set_value('email')); ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Senha</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputConfirmPassword1">Confirmar senha</label>
                                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">&nbsp;Ativo</span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                            <button class="btn btn-light">Cancelar</button>
                                          </form>-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3></h3>
                                </div>
                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nome</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')); ?>">
                                            <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Sobrenome</label>
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Last_name" value="<?php echo (isset($usuario) ? $usuario->last_name : set_value('last_name')); ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Email (Login)</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="<?php echo (isset($usuario) ? $usuario->email : set_value('email')); ?>">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Senha</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Confirmação</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>

                                            <div class="form-group row">

                                                <div class="col-md-6 mb-20">
                                                    <label>Ativo</label>
                                                    <select class="form-control" name="active">

                                                        <?php if (isset($usuario)) : ?>

                                                            <option value="1" <?php echo ($usuario->active == 1 ? 'selected' : ''); ?>>Sim</option>
                                                            <option value="0" <?php echo ($usuario->active == 0 ? 'selected' : ''); ?>>Não</option>
                                                        <?php else : ?>
                                                            <option value="1">Sim</option>
                                                            <option value="0">Não</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 mb-20 row">
                                                    <label>Perfil de acesso</label>
                                                    <select class="form-control" name="perfil">
                                                        <?php if (isset($usuario)) : ?>
                                                            <option value="1" <?php echo ($perfil_usuario->id == 1 ? 'selected' : ''); ?>>Administrador</option>
                                                            <option value="2" <?php echo ($perfil_usuario->id == 2 ? 'selected' : ''); ?>>Atendente</option>
                                                        <?php else : ?>
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Atendente</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                            <button class="btn btn-light">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

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