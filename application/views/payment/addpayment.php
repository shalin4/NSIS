<?php
/**
 * Created by PhpStorm.
 * User: Lakindu
 * Date: 5/17/2018
 * Time: 1:27 PM
 */ ?>
<?php $this->load->view('partials/navbar'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/css/add-payment.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/css/view-registration.css">
<div class="container-fluid row">
    <div class="col-sm-2">

        <table class="table table-striped" id="sideBarTable">
            <thead id="thead1">
            <tr><td><p align="center" id="sideMenuHeader"><b>Student Payment</b></p></td></tr></thead>
            <tbody>
            <tr id="tbody1"><td><p align="center"><a class="sideMenuText" href="">Add Payment</a></p> </td></tr>
            <tr id="tbody2"><td><p align="center"><a class="sideMenuText" href="">View Payments</a></p> </td></tr>
            <tr id="tbody3"><td><p align="center"><a class="sideMenuText" href="">View Due Payments</a></p> </td></tr>
            <tr id="tbody4"><td><p align="center"><a class="sideMenuText" href="">Add Test Paper Money</a></p> </td></tr>
            <tr id="tbody4"><td><p align="center"><a class="sideMenuText" href="">View Test Paper Money</a></p> </td></tr>
            </tbody>
        </table>

    </div>
    <div class="col-sm-1" id="verticleLine">
    </div>
    <br>
    <div id="bodyArea" class="col-sm-9">
        <div id="divTable" style="background-color: #fffcc9" class="form-inline">





<form action="payment/insert" method="post">

    <div class="row">
        <div class="col-sm-6">
            <table id="tbl5" border="0" class="table">

                <tbody id="tbody5">
                <tr>
                    <td> Admission No </td>
                    <td>:</td>
                    <td> <input class="form-control" type="text" name="admission" readonly></td>
                </tr>

                </tbody>
            </table>

        </div>
        <div class="col-sm-6">
            <table id="tbl7" border="0" class="table">

                <tbody id="tbody7">
                <tr>
                    <td> Class </td>
                    <td>:</td>
                    <td><input class="form-control" type="text" name="studentname" readonly></td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-12">
            <table id="tbl8" border="0" class="table">

                <tbody id="tbody8">
                <tr>
                    <td width="14%">Student Name </td>
                    <td width="10%" align="left">: </td>
                    <td><input id="txtStudentName" class="form-control" type="text" name="studentname" readonly></td>
                </tr>

                </tbody>
            </table>

        </div>


    </div>
<!-- Date Fields -->

    <div class="row">
        <div class="col-sm-6">
            <table id="tbl9" border="0" class="table">

                <tbody id="tbody9">
                <tr>
                    <td> Month </td>
                    <td>:</td>
                    <td> <select class="form-control" name="month" readonly>
                            <option value="jan">January</option>
                            <option value="feb">February</option>
                            <option value="mar">March</option>
                            <option value="apr">April</option>
                            <option value="may">May</option>
                            <option value="jun">June</option>
                            <option value="jul">July</option>
                            <option value="aug">August</option>
                            <option value="sep">September</option>
                            <option value="oct">October</option>
                            <option value="nov">November</option>
                            <option value="dec">December</option>
                        </select></td>
                </tr>
                <tr>
                    <td> Payment Type </td>
                    <td>:</td>
                    <td><select class="form-control" name="type">
                            <option value="1">Monthly Fee</option>
                            <option value="2">Computer Fee</option>
                            <option value="3">Bus Fee</option>
                            <option value="3">Test Paper Fee</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Amount (LKR)</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" name="amount"></td>
                </tr>

                </tbody>
            </table>

        </div>
        <div class="col-sm-6">
            <table id="tbl10" border="0" class="table">

                <tbody id="tbody10">
                <tr>
                    <td> Date </td>
                    <td>:</td>
                    <td><input class="form-control" type="date" name="date" readonly></td>
                </tr>
                <tr>
                    <td> Term </td>
                    <td>:</td>
                    <td><select class="form-control" name="term">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select></td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>:</td>
                    <td> <input type="text" name="id"></td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>
    <div class="row">
        <div class="col-sm-4"><button class="btn btn-success btn-md" type="button">SUCCESS</button>  </div>
        <div class="col-sm-4"><button class="btn btn-warning btn-md" type="button">RESET</button>  </div>
        <div class="col-sm-4"><button class="btn btn-primary btn-md" type="button">CANCEL</button>  </div>

    </div>

        </div>

    </div>


<!--</select><br><br>-->
<!--<label>Date:</label> <input type="text" name="date"><br><br>-->
<!--<label>Payment Type:</label>-->
<!--<select name="type">-->
<!--    <option value="1">1</option>-->
<!--    <option value="2">2</option>-->
<!--    <option value="3">3</option>-->
<!--</select><br><br>-->
<!--    <label>Term:</label>-->
<!--    <select name="term">-->
<!--        <option value="1">1</option>-->
<!--        <option value="2">2</option>-->
<!--        <option value="3">3</option>-->
<!--    </select><br><br>-->

<!--    <label for="">Amount</label> <input type="text" name="amount">-->




        </div>
</form>




    </div>

</div>
<?php $this->load->view('partials/footer.html'); ?>