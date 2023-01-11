<?php

defined('BASEPATH') or exit('Ação não permitida');

class Usuarios extends CI_Controller
{

    public function index()
    {


        $data = array(
            'titulo' => 'Usuários cadastrados',
            'sub_titulo' => 'Listando todos os usuários cadastrados no banco de dados',

            'styles' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
            ),

            'scripts' => array(
                'plugins/datatables.net/js/jquery.dataTables.min.js',
                'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'js/datatables.js',
                'plugins/datatables.net/js/estacionamento.js'
            ),
            'usuarios' => $this->ion_auth->users()->result(),
        );



        $this->load->view('layout/header', $data);
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
    }
    public function core($usuario_id = NULL)
    {


        if (!$usuario_id) {


            exit('Pode cadastrar um novo usuario');

            //Cadastro de novo usuario

        } else {
            //Editar o usuario
            if (!$this->ion_auth->user($usuario_id)->row()) {

                exit('Pronto para editar!');

                exit('Usuario não existe');
            } else {
                //Editar usuario
                $this->form_validation->set_rules('first_name', 'Nome', 'trim|required|min_length[5]|max-lengt[20]');
                $this->form_validation->set_rules('last_name', 'Sobrenome', 'trim|required|min_length[5]|max-lengt[20]');
               
                if($this->form_validation->run()){
                    echo '<pre>';
                    print_r($this->input->post());
                    exit();

                }else{
                    //Erro de validação
                    $data = array(
                        'titulo' => 'Editar usuário',
                        'sub_titulo' => 'Edite o usuário',
                        'usuario' => $this->ion_auth->user($usuario_id)->row(),
                        'icone_view' => 'ik ik-user bg-blue',
                        'perfil_usuario' =>  $this->ion_auth->get_users_groups($usuario_id)->row()
                    );
    
                    //echo'<pre>';
                    //print_r($data['perfil_usuario']);
                    //exit();
    
    
                    $this->load->view('layout/header', $data);
                    $this->load->view('usuarios/core');
                    $this->load->view('layout/footer');
                }
               
               
               
                
            }
        }
    }
}
