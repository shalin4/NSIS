<?php $this->load->view('partials/navbar'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/css/view-registration.css">
<!-- LINK REGISTRATION>CSS -->
<!-- Nav bar Over -->

<!-- Side Menu -->
<div class="container-fluid row">
    <div class="col-sm-2">

        <table class="table table-striped" id="sideBarTable">
            <thead id="thead1">
            <tr><td><p align="center" id="sideMenuHeader"><b>Student Payment</b></p></td></tr></thead>
            <tbody>
            <tr id="tbody1"><td><p align="center"><a class="sideMenuText" href="<?php echo base_url('index.php/home/index') ?>">Add New Student</a></p> </td></tr>
            <tr id="tbody2"><td><p align="center"><a class="sideMenuText" href="<?php echo base_url('index.php/register/viewRegistration') ?>">View Registration</a></p> </td></tr>
            <tr id="tbody3"><td><p align="center"><a class="sideMenuText" href="">Approved</a></p> </td></tr>
            <tr id="tbody4"><td><p align="center"><a class="sideMenuText" href="">Incomplete</a></p> </td></tr>
            </tbody>
        </table>

    </div>
    <div class="col-sm-1" id="verticleLine">
    </div>
    <br>
<div id="bodyArea" class="col-sm-9">
    <div id="divTable" style="background-color: #fffcc9" class="form-inline">

<!--        <div style="background-color: #fffcc9" class="col-sm-4">-->

<!--        </div>-->
<!--        <div style="background-color: #fffcc9" class="col-sm-8">-->

                <table id="tbl1" border="0" class="table">

                    <tbody id="tbody1">
                    <tr>
                        <td rowspan="10" width="30%"> <img id="studentImage" src="<?php echo base_url() ?>/vendor/images/studentAvatar.png"
                                       alt="Student Image" width="80%" height="auto">
                        </td>
                        <td>Name </td>
                        <td>:</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Admission No </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Contact </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Fax NO </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Address </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Gender </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Date Of Birth </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Age </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Religion </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Race </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>

                </table>

<div id="headerParents" style="margin-left: 5%">
<p style="font-size: 18px"><b>Parents / Guardian</b></p>
</div>
      <div class="row">
          <div class="col-sm-6">
              <table id="tbl2" border="0" class="table">

                  <tbody id="tbody2">
                  <tr>
                      <td>Father's Name </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Contact </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Email </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Occupation </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Qualification </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Monthly Income </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  </tbody>
              </table>

          </div>
          <div class="col-sm-6">
              <table id="tbl3" border="0" class="table">

                  <tbody id="tbody3">
                  <tr>
                      <td>Mother's Name </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Contact </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Email </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Occupation </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Qualification </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Monthly Income </td>
                      <td>:</td>
                      <td>&nbsp;</td>
                  </tr>
                  </tbody>
              </table>

          </div>

      </div>

        <!-- SIBLINGS -->


        <div id="headerSiblings" style="margin-left: 5%">
            <p style="font-size: 18px"><b>Siblings</b></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <table id="tbl4" border="0" class="table">

                    <tbody id="tbody4">
                    <tr>
                        <td> Name </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>School </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Grade </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6">
                <table id="tbl5" border="0" class="table">

                    <tbody id="tbody5">
                    <tr>
                        <td> Name </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>School </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Grade </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    </tbody>
                </table>

            </div>

        </div>

        <!-- DISABILITIES & DONATION -->



        <div class="row">
            <div class="col-sm-6">
                <div id="headerDisabilities" style="margin-left: 5%">
                    <p style="font-size: 18px"><b>Physical Disabilities</b></p>
                </div>
                <table id="tbl8" border="0" class="table">

                    <tbody id="tbody8">
                    <tr>
                        <td></td>

                    </tr>
                    </tbody>
                </table>

            </div>
            <div id="headerDonation" style="margin-left: 5%">
                <p style="font-size: 18px"><b>Donation</b></p>
            </div>
            <div class="col-sm-6">
                <table id="tbl7" border="0" class="table">

                    <tbody id="tbody7">
                    <tr>
                        <td>Donated Amount (LKR) </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Installments </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <!-- TRAVEL MODE & CLASS DETAILS -->


        <div class="row">
            <div class="col-sm-6">
                <div id="headerTravel" style="margin-left: 5%">
                    <p style="font-size: 18px"><b>Travel Mode(s)</b></p>
                </div>
                <table id="tbl9" border="0" class="table">

                    <tbody id="tbody9">
                    <tr>
                        <td> </td>

                    </tr>
                    </tbody>
                </table>

            </div>
            <div id="headerClassDetails" style="margin-left: 5%">
                <p style="font-size: 18px"><b>Class Details</b></p>
            </div>
            <div class="col-sm-6">
                <table id="tbl10" border="0" class="table">

                    <tbody id="tbody10">
                    <tr>
                        <td>Date Entered To Class </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Grade/Class </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Syllabus </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Date Of Admission </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <!-- LAST SCHOOL(S) -->

        <div id="headerLastSchool" style="margin-left: 5%">
            <p style="font-size: 18px"><b>School(s) Last Attented</b></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <table id="tbl11" border="0" class="table">

                    <tbody id="tbody11">
                    <tr>
                        <td> School </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Grade </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="col-sm-6">
                <table id="tbl12" border="0" class="table">

                    <tbody id="tbody12">
                    <tr>
                        <td> School </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Grade </td>
                        <td>:</td>
                        <td>&nbsp;</td>
                    </tr>


                    </tbody>
                </table>

            </div>

        </div>

        <br>
        <hr>
<div align="center">
        <button type="button" class="btn btn-success btn-lg">OK</button>
    <br>
</div>

<br>
    </div>


</div>
    <br>
</div>
<br>
<?php $this->load->view('partials/footer.html'); ?>
