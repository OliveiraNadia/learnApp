<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicial extends CI_Controller {

   
      public function verificaSessao(){
          
          if($this->session->userdata('logado') == false){
              redirect('inicial/login');
          }
      }
      public function index()        
	{
            //$this->verificaSessao();
            $this->load->view('includes/header');          
            $this->load->view('inicial');
            $this->load->view('includes/footer');
        
               
	}
      public function areaAdministrador(){
           $this->load->view('includes/header');
           $this->load->view('includes/menuAdm');
           $this->load->view('areaAdministrador');
           $this->load->view('includes/footer');
          
      }
        public function login(){
            $this->load->view('includes/header');
            $this->load->view('includes/menuHome');
            $this->load->view('login');
            $this->load->view('includes/footer');
        }
        
        public function logar(){
            
            $email = $this->input->post('emailUsuarios');
            $senha = $this->input->post('senhaUsuarios');
            
            $this->db->where('emailUsuarios',$email);
            $this->db->where('senhaUsuarios',$senha);
            $this->db->where('statusUsuarios',1);
            $data['usuarios'] = $this->db->get('usuarios')->result();
            
            
            if(count($data['usuarios'])==1){
                $dados['nomeUsuarios'] =$data['nomeUsuarios'][0]->nomeUsuarios;
                $dados['idUsuarios'] =$data['idUsuarios'][0]->idUsuarios;
                $dados['tipoPerfil']=$data['tipoPerfil'][0]->tipoPerfil;
                $dados['logado']= true;
                $this->session->set_userdata($dados);
                
                if($this->tipoPerfil){
                    
                }
                redirect('inicial/areaAdministrador');
                
            }else{
                redirect('inicial');
            }
                
            }
            public function logout(){
                
                $this->session->sess_destroy();
                redirect('inicial/login');
                
            }
            
        }
     
        
        
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */