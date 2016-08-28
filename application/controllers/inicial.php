<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicial extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
   
      public function verificaSessao(){
          
          if($this->session->userdata('logado') == false){
              redirect('inicial/login');
          }
      }
      public function index()
               
	{
            $this->verificaSessao();
            $this->load->view('includes/header');
            $this->load->view('includes/menu');           
            $this->load->view('inicial');
            $this->load->view('includes/footer');
        
               
	}
        public function login(){
            
            $this->load->view('includes/header');         
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
                $dados['logado']= true;
                $this->session->set_userdata($dados);
                redirect('inicial');
                
            }else{
                redirect('inicial/login');
            }
                
            }
            public function logout(){
                
                $this->session->sess_destroy();
                redirect('inicial');
                
            }
            
        }
     
        
        
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */