<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Logindata');
    }


    public function homepage(){

        $this->load->view('login');

    }

    public function signup(){

        $this->load->view('signin/index');
    }

    public function login(){
        $this->load->view('signin/login');
    }

    public function dashboard(){
        $this->load->view('dashboard/index');
    }

    public function errorpage(){
        $this->load->view('dashboard/404');
    }

    public function logdata(){

        $data=array();
        $date['name']=$this->input->post('name');
        $date['email']=$this->input->post('email');
        $date['username']=$this->input->post('username');
        $date['password']=$this->input->post('password');
        $this->Logindata->loginparse($date);
        redirect('Home/signup');
    }

    public function loginprocess(){



        $login_data=array();
        $checked_data=array();
        $login_data['username']=$this->input->post('username');
        $login_data['password']=$this->input->post('pass');
        $checked_data = $this->Logindata->dologin($login_data);
        $matched_data = json_decode(json_encode($checked_data), True);

       if ($matched_data[0]['password'] == $login_data['password']){

            redirect('Home/dashboard');
        }
        else{
            redirect('Home/errorpage');
        }
    }

}