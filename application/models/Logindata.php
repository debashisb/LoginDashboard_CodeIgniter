<?php


class Logindata extends CI_Model
{

    public function loginparse($data){

        $this->db->insert('userinfo',$data);
    }

    public function dologin($logdata){

        $this->db->select('password');
        $this->db->from('userinfo');
        $this->db->where('username', $logdata['username']);
        $query = $this->db->get();
        return $query->result();

    }
}