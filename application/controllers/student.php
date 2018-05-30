<?php
/**
 * Created by PhpStorm.
 * User: Shalin
 * Date: 5/22/2018
 * Time: 9:35 AM
 */

class student extends CI_Controller{

    public function index(){
        $this->load->view('student/view-student');
    }

}