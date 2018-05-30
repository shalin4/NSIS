<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/18/2018
 * Time: 10:27 AM
 */

class Viewstudent extends CI_Controller{


    public function __construct() {
        parent::__construct();
        $this->load->model('dao');
    }


    public function index(){

        $this->load->view('payment/viewstudent');

    }

    public function select(){

    $data['students'] = $this->dao->selectall('student','id desc');
    $this->load->view('payment/viewstudent',$data);
    }

    public function view(){

        $this->load->view('payment/view');
    }
}