<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/3/2018
 * Time: 11:21 AM
 */

class Register extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('dao');
    }

    public function index(){

        $this->load->view('registration');
    }

    public function insert(){

        $admission1 = $_POST['admissionNo1'];
        $admission2 = $_POST['admissionNo2'];
        $admission = "NSIS / " . $admission1 . " / " . $admission2;

        $namewithinitial = $_POST['nameInitials'];
        $fullname = $_POST['fullName'];
        $denotedname = $_POST['denotedName'];
        $address1 = $_POST['address1'];
        $resphoneno = $_POST['resPhoneNo'];
        $address2 = $_POST['address2'];
        $resfaxno = $_POST['resFaxNo'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $dobyear = $_POST['dobYear'];
        $dobmonth = $_POST['dobMonth'];
        $dobday = $_POST['dobDay'];
        $age = $_POST['age'];
        $religion = $_POST['religion'];
        $race = $_POST['race'];
        $fathername = $_POST['fatherName'];
        $fatherqualification = $_POST['fatherQualification'];
        $fatheroccupation = $_POST['fatherOccupation'];
        $fathermobile = $_POST['fatherMobile'];
        $fatheremail = $_POST['fatherEmail'];
        $fatherincome = $_POST['fatherMonthlyIncome'];
        $mothername = $_POST['motherName'];
        $motherqualification = $_POST['motherQualification'];
        $motheroccupation = $_POST['motherOccupation'];
        $mothermobile = $_POST['motherMobile'];
        $motheremail = $_POST['motherEmail'];
        $motherincome = $_POST['motherMonthlyIncome'];
        $guardianname = $_POST['guardianName'];
        $guardianqualification = $_POST['guardianQualification'];
        $guardianoccupation = $_POST['guardianOccupation'];
        $guardianmobile = $_POST['guardianMobile'];
        $gardianemail = $_POST['gardianEmail'];
        $guardianincome = $_POST['guardianMonthlyIncome'];
        $physicaldisabilities = $_POST['physicalDisabilities'];
        $physicaldisabilityreason = $_POST['physicalDisabilityReason'];
        $donation = $_POST['donation'];
        $installment = $_POST['installment'];
        $registerdate = $_POST['registerDate'];
        $studentgrade = $_POST['studentGrade'];
        $syllabustype = $_POST['syllabusType'];
        $admissiondate = $_POST['admissionDate'];

        /*
            photo
            siblings
            schools
        */


        /*
         * insert into student table
         *
         */

        $data = array(

            'admissionno' => $admission,
            'studentname' => $fullname,
            'initialname' => $namewithinitial,
            'denoteinitial' => $denotedname,
            'phone' => $resphoneno,
            'fax' => $resfaxno,
            'gender' => $gender,
            'birthdate' => $dobday,
            'birthmonth' => $dobmonth,
            'birthyear' => $dobyear,
            'age' => $age,
            'religion' => $religion,
            'physicaldisabilities' => $physicaldisabilities,
            'description' => $physicaldisabilityreason,
            'donationamount' => $donation,
            'donationinstalment' => $installment,
            'classregisterdate' => $registerdate,
            'grade' => $studentgrade,
            'dateofadmission' => $admissiondate,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'syllabustype' => $syllabustype,
            'race' => $race

        );

        $this->dao->insert('student', $data);

        /*
         * get ID for foreign key
         */

        $insert_id = $this->db->insert_id();
        $id = $insert_id;

        /*
         * insert into Parent table
         */

        $data2 = array(

            'fathername' => $fathername,
            'fatheroccupation' => $fatheroccupation,
            'fatheremail' => $fatheremail,
            'fatherqualification' => $fatherqualification,
            'fathermobile' => $fathermobile,
            'fatherincome' => $fatherincome,
            'mothername' => $mothername,
            'motheroccupation' => $motheroccupation,
            'motheremail' => $motheremail,
            'motherqualification' => $motherqualification,
            'mothermobile' => $mothermobile,
            'motherincome' => $motherincome,
            'guardianname' => $guardianname,
            'guardianoccupation' => $guardianoccupation,
            'guardianemail' => $gardianemail,
            'guardianqualification' => $guardianqualification,
            'guardianmobile' => $guardianmobile,
            'guardianincome' => $guardianincome,
            'student_id' => $id
        );

        $this->dao->insert('parent', $data2);


        if ( !empty($_POST['travelMode']) ) {
            foreach ($_POST['travelMode'] as $check) {


                $data3 = array(

                    'student_id' => $id,
                    'travelmode_id' => $check


                );

                $this->load->model('dao');
                $this->dao->insert('student_travelmode', $data3);


            }
        }


        $siblings = json_decode($_POST['json']);

        /*
         * get ID for foreign key
         */

        $insert_id1 = $this->db->insert_id();
        $id1 = $insert_id1;


        /*
         * Add data to Siblings Table
         */
        foreach ($siblings as $value) {


            $name = $value->name;
            $school = $value->school;
            $grade = $value->grade;

            if ( $name ) {
                $data4 = array(

                    'name' => $name,
                    'school' => $school,
                    'grade' => $grade,
                    'student_id' => $id1

                );



                $this->dao->insert('sibling', $data4);

            }
        }

        $schools = json_decode($_POST['json2']);

        /*
         * get ID for foreign key
         */

        $insert_id2 = $this->db->insert_id();
        $id2 = $insert_id2;

        /*
         * Add data to Siblings Table
         */
        foreach ($schools as $value) {


            $school = $value->schoolname;
            $grade = $value->lastgrade;

            if ( $school ) {
                $data5 = array(

                    'school' => $school,
                    'grade' => $grade,
                    'student_id' => $id2

                );

                $this->dao->insert('lastschool', $data5);
            }
        }
    }
}