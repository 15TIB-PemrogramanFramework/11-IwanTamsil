<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Contacts Model
	*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class pesanuser extends CI_Model {

       function pesan($where= "") {
        $data = $this->db->query('select * from komentar '.$where);
        return $data;
    }



     function sendMessage($table,$data) {
        return $this->db->insert($table, $data);
    }
            

        // Delete Message
           function Hapus($table,$where){
        return $this->db->delete($table,$where);
    }  

    
}