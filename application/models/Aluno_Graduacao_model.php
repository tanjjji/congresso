<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Aluno_Graduacao_model extends CI_Model{ 


    public function insert($dados){
        if($this->db->insert('aluno_graduacao',$dados)){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }




} 