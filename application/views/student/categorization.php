<?php
/**
 * Created by PhpStorm.
 * User: Shalin
 * Date: 5/22/2018
 * Time: 1:40 PM
 */
?>
<?php $this->load->view('partials/navbar'); ?>
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



                    <div align="center" class="col-sm-4">
                        <button type="button" class="btn btn-success btn-lg">KG</button>
                    </div>
                    <div align="center" class="col-sm-4">
                        <button type="button" class="btn btn-success btn-lg">LKG</button>
                    </div>
                    <div align="center" class="col-sm-4">
                        <button type="button" class="btn btn-success btn-lg">UKG</button>
                    </div>
                <br><br><br><br>

                <div align="center" class="col-sm-3">
                    <button type="button" class="btn btn-success btn-lg">Grade 1</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 2</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 3</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 4</button>

                </div>
                <div align="center" class="col-sm-3">
                    <button type="button" class="btn btn-success btn-lg">Grade 5</button>

                </div>

                <br><br><br><br>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 6</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 7</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 8</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 9</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 10</button>

                </div>
                <div align="center" class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg">Grade 11</button>

                </div>
                    <br><br><br><br>
                    <div align="center" class="col-sm-6">
                        <button type="button" class="btn btn-success btn-lg">Grade 12</button>

                    </div>
                    <div align="center" class="col-sm-6">
                        <button type="button" class="btn btn-success btn-lg">Grade 13</button>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<br><br>
<?php $this->load->view('partials/footer.html'); ?>
