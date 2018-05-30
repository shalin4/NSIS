<?php include 'partials/navbar.html' ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/css/registration.css">

<!-- LINK REGISTRATION>CSS -->
                <!-- Nav bar Over -->

                <!-- Side Menu -->

<div class="container-fluid row">
    <div class="col-sm-2">

        <table class="table table-striped" id="sideBarTable">
            <thead id="thead1">
            <tr><td><p align="center" id="sideMenuHeader"><b>Student Registration</b></p></td></tr></thead>
            <tbody>
            <tr id="tbody1"><td><p align="center"><a class="sideMenuText" href="">Add New Student</a></p> </td></tr>
            <tr id="tbody2"><td><p align="center"><a class="sideMenuText" href="">View Registrations</a></p> </td></tr>
            <tr id="tbody3"><td><p align="center"><a class="sideMenuText" href="">Approved</a></p> </td></tr>
            <tr id="tbody4"><td><p align="center"><a class="sideMenuText" href="">Incomplete</a></p> </td></tr>
            </tbody>
        </table>

    </div>
    <div class="col-sm-1" id="verticleLine">
    </div>
<br>
    <div class="col-sm-8">

        <div class="form-inline">

        <table id="tbl1" border="1" class="table">
            <?php echo form_open('register/insert') ?>
            <tbody id="tbody">
        <tr style="background-color: #fffcc9">
            <td><label for="txtAdmissionNo1">Admission NO : NSIS </label>
                <input id="txtAdmissionNo1" name="admissionNo1" type="text" class="form-control" size="10">
                /<input id="txtAdmissionNo2" name="admissionNo2" class="form-control" type="text" size="10"></td>
            <td><label for="txtNameInitials">Name With Initials : </label><input id="txtNameInitials" name="nameInitials" class="form-control" type="text" size="28px" ></td>
        </tr>

        <tr>
            <td colspan="2"><label for="txtStudentName">Student Name :</label><input name="fullName" id="txtStudentName" type="text" class="form-control" size="106px"></td>
        </tr>
        <tr style="background-color: #fffcc9">
            <td colspan="2"><label for="txtDenoted">Denoted By Initials :</label><input name="denotedName" id="txtDenoted" type="text" class="form-control" size="106px"></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtAddress1">Address 1 :</label><input name="address1" id="txtAddress1" type="text" class="form-control" size="30"></td>
            <td><label for="txtPhone">Res. Phone No : </label><input name="resPhoneNo"  placeholder="+94" id="txtPhone" class="form-control" type="text" size="30" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtAddress2">Address 2 :</label><input name="address2" id="txtAddress2" type="text" class="form-control" size="30"></td>
            <td><label for="txtFax">Res. Fax No : </label><input name="resFaxNo" placeholder="+94" id="txtFax" class="form-control" type="text" size="30" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td colspan="2"><label for="txtCity">City : </label><input name="city" id="txtCity" type="text" class="form-control" size="30"></td>
            </tr>

          <tr>
              <td colspan="2"><hr id="hr1"></td>

          </tr>

        <tr>
            <td colspan="2"><label for="selectGender">Gender :</label>
                    <select name="gender" id="selectGender" class="form-control">
                        <option selected disabled>Please Select a Gender</option>
                        <option>Male</option>
                        <option>Female</option></select>
                <label id="txtDOB">Date Of Birth :</label>
                    <input id="dobYear" placeholder="Year(YYYY)" name="dobYear" class="form-control" type="text" size="15px">
                    <input id="dobMonth" placeholder="Month(MM)" name="dobMonth" class="form-control" type="text" size="15px">
                    <input id="dobDay" placeholder="Day(DD)" name="dobDay" class="form-control" type="text" size="15px"></td>

        </tr>

        <tr>
            <td colspan="2"><label for="txtAge">Age :</label>
                <input name="age" id="txtAge" class="form-control" type="text" size="18px">
                <label for="txtReligion" id="selectReligion">Religion :</label>
                    <select name="religion" id="txtReligion" class="form-control">
                        <option selected disabled>Please Select a Religion</option>
                        <option>Buddhist</option>
                        <option>Hindu</option>
                        <option>Muslim</option>
                        <option>Roman Catholic</option>
                        <option>Christian</option>
                    </select>

                <label for="labelRace" id="selectRace">Race :</label>
                    <select name="race" id="labelRace" class="form-control">
                        <option selected disabled>Please Select a Race</option>
                        <option>Sinhalese </option>
                        <option>Tamil</option>
                        <option>Muslim</option>
                        <option>Burgher</option>
                        <option>Malay</option>

                    </select></td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr2"></td>
        </tr>

            <!-- NEWWWWWWWWWWWWWWWWWWWWWWWWWWW -->
        <tr style="background-color: #fffcc9">
            <td><label for="txtFatherName">Father's Name :</label><input name="fatherName" id="txtFatherName" type="text" class="form-control" size="40"></td>
            <td><label for="txtQualification1">Qualification : </label><input name="fatherQualification" placeholder="" id="txtQualification1" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtOccupation1">Occupation :</label><input name="fatherOccupation" id="txtOccupation1" type="text" class="form-control" size="40"></td>
            <td><label for="txtMobileNo1">Mobile No : </label><input name="fatherMobile" placeholder="" id="txtMobileNo1" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtEmail1">Email :</label><input name="fatherEmail" id="txtEmail1" type="text" class="form-control" size="40"></td>
            <td><label for="txtMonthlyIncome1">Monthly Income : </label><input name="fatherMonthlyIncome" placeholder="" id="txtMonthlyIncome1" class="form-control" type="text" size="40" ></td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr11"></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtMotherName">Mother's Name :</label><input name="motherName" id="txtMotherName" type="text" class="form-control" size="40"></td>
            <td><label for="txtQualification2">Qualification : </label><input name="motherQualification" placeholder="" id="txtQualification2" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtOccupation2">Occupation :</label><input name="motherOccupation" id="txtOccupation2" type="text" class="form-control" size="40"></td>
            <td><label for="txtMobileNo2">Mobile No : </label><input name="motherMobile" placeholder="" id="txtMobileNo2" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtEmail2">Email :</label><input name="motherEmail" id="txtEmail2" type="text" class="form-control" size="40"></td>
            <td><label for="txtMonthlyIncome2">Monthly Income : </label><input name="motherMonthlyIncome" placeholder="" id="txtMonthlyIncome2" class="form-control" type="text" size="40" ></td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr12"></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtGuardianName">Guardian's Name :</label><input name="guardianName" id="txtGuardianName" type="text" class="form-control" size="40"></td>
            <td><label for="txtQualification3">Qualification : </label><input name="guardianQualification" placeholder="" id="txtQualification3" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtOccupation3">Occupation :</label><input name="guardianOccupation" id="txtOccupation3" type="text" class="form-control" size="40"></td>
            <td><label for="txtMobileNo3">Mobile No : </label><input name="guardianMobile" placeholder="" id="txtMobileNo3" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtEmail3">Email :</label><input name="gardianEmail" id="txtEmail3" type="text" class="form-control" size="40"></td>
            <td><label for="txtMonthlyIncome3">Monthly Income : </label><input name="guardianMonthlyIncome" placeholder="" id="txtMonthlyIncome3" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr>
            <td colspan="2"><hr id="hr3"></td>
        </tr>
        <!-- Siblings -->
        <tr>
            <td colspan="2"><label>Siblings</label></td>
        </tr>
        <tr id="tr1">
            <td colspan="2">
                <label class="myLabel" >Name :</label><input name="siblingName1" class="form-control" type="text">
                <label class="myLabel"  >School :</label><input name="siblingSchool1" class="form-control" type="text">
                <label class="myLabel" >Grade :</label><input  name="siblingGrade1" class="form-control" type="text"></td>
        </tr>

        <tr id="row1">
            <td colspan="2">
                <label class="myLabel" >Name :</label><input  name="siblingName2" class="form-control" type="text">
                <label class="myLabel" >School :</label><input name="siblingSchool2"   class="form-control" type="text">
                <label class="myLabel" >Grade :</label><input name="siblingGrade2"  class="form-control" type="text">
                <span id="glyphiconPlus" class="glyphicon glyphicon-plus"></span></td>
        </tr>


        <tr>
            <td colspan="2"><hr id="hr4"></td>
        </tr>

        <tr>
            <td colspan="2">
                <label id="">Physical Disabilities :</label>
               <label for="physicalYes" id="labelDisabilityYes">Yes</label> <input id="physicalYes" class="" type="radio" name="physicalDisabilities" value="Yes" >
               <label for="physicalNo" id="labelDisabilityNo">No</label> <input id="physicalNo" class="" type="radio" name="physicalDisabilities" value="No" checked>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <label for="textAreaDisability">If Yes :</label>
                <textarea name="physicalDisabilityReason" class="form-control" id="textAreaDisability" cols="100" ></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2"><hr id="hr5"></td>
        </tr>

        <tr>
            <td colspan="2">
                <label>Travel Mode</label>
                <input id="checkNsis" type="checkbox" name="travelMode[]" value="1"><label for="checkNsis" id="labelNsis">NSIS Transport</label><br>
                <input id="checkOwn" type="checkbox" name="travelMode[]" value="2" ><label for="checkOwn" id="labelOwn">Own Vehicle</label><br>
                <input id="checkPublic" type="checkbox" name="travelMode[]" value="3" ><label for="checkPublic" id="labelPublic">Public Transport</label><br>
                <input id="checkPrivate" type="checkbox" name="travelMode[]" value="4" ><label for="checkPrivate" id="labelPrivate">Private Service</label><br>
                <input id="checkWalk" type="checkbox" name="travelMode[]" value="5" ><label for="checkWalk" id="labelWalk">Walk</label>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr6"></td>
        </tr>
        <tr>
            <td colspan="2">
                <label>Student Image : </label>
                <img id="imgStudent" src="<?php echo base_url(); ?>/vendor/images/student_image.jpg" alt="Student Image" class="img-thumbnail" width="150px" height="150px">
                <label id="labelUploadImg" class="form-control">
                    Upload Image <input type="file" name="studentImage"  id="uploadImg" accept="image/*">
                </label>

            </td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr7"></td>
        </tr>
        <tr>
            <td colspan="2">
              <label for="txtDonation">Donation Amount : LKR</label>
                <input id="txtDonation" type="text" name="donation" class="form-control" size="35px" > <br><br>
              <label for="txtInstallment">No. Of Insatallments For Donation :</label>
                <input  class="form-control" id="txtInstallment" type="text" name="installment"  size="35px">
            </td>
        </tr>

        <tr>
            <td colspan="2"><hr id="hr8"></td>
        </tr>

        <tr id="row2">
            <td colspan="2">
                <label>Schools Last Attended </label>
                <br>
                <label for="lastSchool1">School :</label> <input id="lastSchool1" name="lastSchool1" type="text" class="form-control" size="80px">

                <label for="lastGrade1" id="lastSchoolGrade">Grade :</label> <input onkeyup="validateNumbers(lastGrade1)" id="lastGrade1" name="lastGrade1" type="text" class="form-control">

                <span id="glyphiconPlus2"  class="glyphicon glyphicon-plus"></span>
            </td>
        </tr>

        <tr>
            <td colspan="2"><hr id="hr9"></td>
        </tr>

        <tr>
            <td colspan="2">
                <label for="registerDate">Date Entered To The Class Register :</label>

                    <input id="registerDate" type="date" class="form-control" name="registerDate" placeholder="DD/MM/YYYY">

            </td>
        </tr>
        <tr>
            <td colspan="2"><br>
                <label for="studentGrade">Grade : </label> <input name="studentGrade" id="studentGrade" type="text" class="form-control">
                <label id="local">Local</label> <input class="" type="radio" name="syllabusType" value="local" checked >
                <label id="london">London</label> <input class="" type="radio" name="syllabusType" value="london" >
                <br><br><br>
                <label for="admissionDate">Date Of Admission : </label>

                    <input id="admissionDate" type="date" class="form-control" name="admissionDate" placeholder="DD/MM/YYYY">


            </td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr10"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input id="btnSubmit" type="submit" class="btn btn-success" value="Submit">
                <input id="btnReset"  type="reset" class="btn btn-warning" value="Reset">
                <input id="btnCancel" type="button" class="btn btn-primary" value="Cancel">
            </td>
        </tr>

            </tbody>
            <?php echo form_close() ?>
        </table>
        </div>

    </div>
</div>

<!-- include footer -->

<?php include "partials/footer.html"; ?>

</body>
<script>

    txtAdmissionNo1.setAttribute("onKeyUp","validateNumbers(txtAdmissionNo1)");
    txtAdmissionNo2.setAttribute("onKeyUp","validateNumbers(txtAdmissionNo2)");
    dobYear.setAttribute("onKeyUp","validateNumbers(dobYear)");
    dobMonth.setAttribute("onKeyUp","validateNumbers(dobMonth)");
    dobDay.setAttribute("onKeyUp","validateNumbers(dobDay)");
    txtAge.setAttribute("onKeyUp","validateNumbers(txtAge)");
    txtDonation.setAttribute("onKeyUp","validateNumbers(txtDonation)");
    txtInstallment.setAttribute("onKeyUp","validateNumbers(txtInstallment)");
    studentGrade.setAttribute("onKeyUp","validateNumbers(studentGrade)");

    function validateNumbers(id){
        var admission1 = id.value;
        var number = new RegExp('^[0-9]+$');

        if(number.test(admission1)){
            id.style.backgroundColor= "lightGreen";
        }
        else {
            id.style.backgroundColor= "pink";
        }
    }





</script>

<script src="<?php base_url()?>vendor/js/registration.js"></script>

</html>