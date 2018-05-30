<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/17/2018
 * Time: 2:04 PM
 */
class Payment extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('dao');
    }


    public function index(){
        $this->load->view('payment/addpayment');
    }

    public function viewPayment(){
        $this->load->view('payment/view-payment');
    }
    public function viewTestPaper(){
        $this->load->view('payment/view-testpaper');
    }

    public function insert(){
    $name   = $_POST['studentname'];
    $date = $_POST['date'];
    $paidamount = $_POST['amount'];
    $class = $_POST['class'];
    $student_id = $_POST['id'];
    $fee_id = $_POST['type'];
    $admission = $_POST['admission'];
    $month = $_POST['month'];
    $term = $_POST['term'];

    /*
     * insert into payment table
     *
     */

    $data = array(


        'student' => $name,
        'admissionno' => $admission,
        'month' => $month,
        'term' => $term,
        'date' => $date,
        'paidamount' => $paidamount,
        'class' => $class,
        'student_id' => $student_id,
        'fee_id' => $fee_id

    );


    $this->dao->insert('payment', $data);


}


}

