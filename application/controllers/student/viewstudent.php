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
    $this->load->view('student/view-student');
    }

    public function select(){
        $this->dao->selectall('student');
    $this->load->view('student/viewstudent',$data);
    }

    public function view(){
    $this->load->view('student/view-student');
    }
}