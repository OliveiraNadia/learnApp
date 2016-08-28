<?php


       function verificaSessao(){
          
          if($this->session->userdata('logado') == false){
              redirect('inicial/login');
          }
      }