<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/3/2018
 * Time: 11:18 AM
 */


class Home extends CI_Controller{

    public function index(){

        $this->load->view('registration');


    }
    public function header(){
        $this->load->view('partials/header');
    }




}

