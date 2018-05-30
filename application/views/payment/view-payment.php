<?php
/**
 * Created by PhpStorm.
 * User: Shalin
 * Date: 5/22/2018
 * Time: 1:40 PM
 */
?>
<?php $this->load->view('partials/navbar'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/css/view-payment.css">
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
                <div class="row">
                    <div class="col-sm-3">
                        <img src="" alt="Student Image">

                    </div>
                    <div class="col-sm-9">
                        <table id="tbl5" border="0" class="table">

                            <tbody id="tbody5">
                            <tr>
                                <td> Name</td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td> Admission No </td>
                                <td>:</td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td> Home Contact </td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td> Father/Mother/Guardian </td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td> Address </td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td> Gender </td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>


                    </div>
<div align="center" class="col-sm-12">

    <h2>GRADE 7 - LONDON</h2>

                    <table id="tbl2" width="100%" class="table table-striped" border="1">
                       <thead style="background-color: #7d3102;color: white" >
                        <th>&nbsp;</th>
                        <th>January</th>
                        <th>February</th>
                        <th>March</th>
                        <th>April</th>
                        <th>May</th>
                        <th>June</th>
                        <th>July</th>
                        <th>August</th>
                        <th>September</th>
                        <th>October</th>
                        <th>November</th>
                        <th>December</th>
                       </thead>
                        <tbody>
                        <tr>
                            <td style="background-color: #7d3102;color: white">Admission Fee</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="background-color: #7d3102;color: white">Monthly Fee</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="background-color: #7d3102;color: white">Computer Fee</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="background-color: #7d3102;color: white">Bus Fee</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>



                        </tbody>

                    </table>

</div>
<div align="center" class="col-sm-4"> PAID </div>
<div align="center" class="col-sm-4">DUE</div>
<div align="center" class="col-sm-4">OTHER TRANSPORT</div>

                </div>

            </div>
        </div>
    </div>
    <br><br>
<?php $this->load->view('partials/footer.html'); ?>