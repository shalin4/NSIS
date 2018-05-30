<?php $this->load->view('partials/navbar'); ?>
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



            <tbody id="tbody">

        <tr style="background-color: #fffcc9">
            <?php
            $attributes = array('id' => 'myform');
            echo form_open('register/insert', $attributes) ?>
            <td><label for="txtAdmissionNo1">Admission NO* : NSIS </label>
                <input id="txtAdmissionNo1" name="admissionNo1" type="text" class="form-control" size="10">
                /<input id="txtAdmissionNo2" name="admissionNo2" class="form-control" type="text" size="10"></td>
            <td><label for="txtNameInitials">Name With Initials* : </label><input id="txtNameInitials" name="nameInitials" class="form-control" type="text" size="28px" ></td>
        </tr>

        <tr>
            <td colspan="2"><label for="txtStudentName">Student Name* :</label><input name="fullName" id="txtStudentName" type="text" class="form-control" size="106px"></td>
        </tr>
        <tr style="background-color: #fffcc9">
            <td colspan="2"><label for="txtDenoted">Denoted By Initials* :</label><input name="denotedName" id="txtDenoted" type="text" class="form-control" size="106px"></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtAddress1">Address 1* :</label><input name="address1" id="txtAddress1" type="text" class="form-control" size="30"></td>
            <td><label for="txtPhone">Res. Phone No : </label><input name="resPhoneNo"  placeholder="+94" id="txtPhone" class="form-control" type="text" size="30" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtAddress2">Address 2 :</label><input name="address2" id="txtAddress2" type="text" class="form-control" size="30"></td>
            <td><label for="txtFax">Res. Fax No : </label><input name="resFaxNo" placeholder="+94" id="txtFax" class="form-control" type="text" size="30" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td colspan="2"><label for="txtCity">City* : </label><input name="city" id="txtCity" type="text" class="form-control" size="30"></td>
            </tr>

          <tr>
              <td colspan="2"><hr id="hr1"></td>

          </tr>

        <tr>
            <td colspan="2"><label for="selectGender">Gender* :</label>
                    <select name="gender" id="selectGender" class="form-control">
                        <option selected disabled>Please Select a Gender</option>
                        <option>Male</option>
                        <option>Female</option></select>
                <label id="txtDOB">Date Of Birth* :</label>
                    <input id="dobYear" placeholder="Year(YYYY)" name="dobYear" class="form-control" type="text" size="15px">
                    <input id="dobMonth" placeholder="Month(MM)" name="dobMonth" class="form-control" type="text" size="15px">
                    <input id="dobDay" placeholder="Day(DD)" name="dobDay" class="form-control" type="text" size="15px"></td>

        </tr>

        <tr>
            <td colspan="2"><label for="txtAge">Age* :</label>
                <input name="age" id="txtAge" class="form-control" type="text" size="18px">
                <label for="txtReligion" id="selectReligion">Religion* :</label>
                    <select name="religion" id="txtReligion" class="form-control">
                        <option selected disabled>Please Select a Religion</option>
                        <option>Buddhist</option>
                        <option>Hindu</option>
                        <option>Muslim</option>
                        <option>Roman Catholic</option>
                        <option>Christian</option>
                    </select>

                <label for="labelRace" id="selectRace">Race* :</label>
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


        <tr style="background-color: #fffcc9">
            <td><label for="txtFatherName">Father's Name* :</label><input name="fatherName" id="txtFatherName" type="text" class="form-control" size="40"></td>
            <td><label for="txtQualification1">Qualification : </label><input name="fatherQualification" placeholder="" id="txtQualification1" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtOccupation1">Occupation* :</label><input name="fatherOccupation" id="txtOccupation1" type="text" class="form-control" size="40"></td>
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
            <td><label for="txtMotherName">Mother's Name* :</label><input name="motherName" id="txtMotherName" type="text" class="form-control" size="40"></td>
            <td><label for="txtQualification2">Qualification : </label><input name="motherQualification" placeholder="" id="txtQualification2" class="form-control" type="text" size="40" ></td>
        </tr>

        <tr style="background-color: #fffcc9">
            <td><label for="txtOccupation2">Occupation* :</label><input name="motherOccupation" id="txtOccupation2" type="text" class="form-control" size="40"></td>
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
        </tr> </tbody></table>
        <!-- Siblings -->
            <table id="tbl2" border="1" class="table" >
        <tr style="background-color: #fffcc9">
            <td colspan="2"><label>Siblings</label></td>
        </tr>
        <tr>

            <td colspan="2" id="siblingName1"><label class="myLabel" >Name :</label><input type="text" name="siblingName1" class="form-control"></td>
            <td id="siblingSchool1"><label class="myLabel"  >School :</label><input type="text" name="siblingSchool1" class="form-control"> </td>
            <td id="tdsiblingGrade1"><label class="myLabel" >Grade :</label></label><input name="siblingGrade1" class="form-control" type="text" onkeyup="validateNumbers(this)" id="siblingGrade1"> </td>
            <td id="tdBtn"><span id="glyphiconPlus2" class="glyphicon glyphicon-plus" onclick="addrow()"></span></td>
        </tr>


</table>
            <table id="tbl3" border="1" class="table" >
        <tr>
            <td colspan="2"><hr id="hr4"></td>
        </tr>

        <tr>
            <td colspan="2">
                <label id="">Physical Disabilities* :</label>
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
                <label>Travel Mode* :</label>
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
                <label>Student Image* : </label>
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
              <label for="txtDonation">Donation Amount* : LKR</label>
                <input id="txtDonation" type="text" name="donation" class="form-control" size="35px" > <br><br>
              <label for="txtInstallment">No. Of Insatallments For Donation :</label>
                <input  class="form-control" id="txtInstallment" type="text" name="installment"  size="35px">
            </td>
        </tr>

        <tr>
            <td colspan="2"><hr id="hr8"></td>
        </tr>
                <table id="tbl4" border="1" class="table" >
                    <tr style="background-color: #fffcc9">
                        <td colspan="2"><label>Last Attended Schools</label></td>
                    </tr>
                    <tr>

                        <td colspan="2" id="lastSchoolName1"><label class="myLabel" >School Name :</label><input type="text" name="" class="form-control"></td>
                        <td id="lastSchoolGrade1"><label class="myLabel" >Grade :</label></label><input name="" class="form-control" type="text" onkeyup="validateNumbers(this)" id="schoolGrade1"> </td>
                        <td id="tdBtn"><span id="glyphiconPlus" class="glyphicon glyphicon-plus" onclick="addrow2()"></span>



</tr>


                </table>
                <table id="tbl5" border="1" class="table" >
        <tr>
            <td colspan="2"><hr id="hr9"></td>
        </tr>

        <tr>
            <td colspan="2">
                <label for="registerDate">Date Entered To The Class Register* :</label>

                    <input id="registerDate" type="date" class="form-control" name="registerDate" placeholder="DD/MM/YYYY">

            </td>
        </tr>
        <tr>
            <td colspan="2"><br>
                <label for="studentGrade">Grade* : </label>
                <select name="studentGrade" id="studentGrade" class="form-control">
                    <option value="none" disabled selected>Select a Grade</option>
                    <option value="KG">KG</option>
                    <option value="LKG">LKG</option>
                    <option value="UKG">UKG</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>
                <label id="local">Local</label> <input class="" type="radio" name="syllabusType" value="local" checked >
                <label id="london">London</label> <input class="" type="radio" name="syllabusType" value="london" >
                <br><br><br>
                <label for="admissionDate">Date Of Admission* : </label>

                    <input id="admissionDate" type="date" class="form-control" name="admissionDate" placeholder="DD/MM/YYYY">


            </td>
        </tr>
        <tr>
            <td colspan="2"><hr id="hr10"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input id="btnSubmit" type="button" class="btn btn-success" value="Submit" onclick="submit1()">
                <input id="btnReset"  type="reset" class="btn btn-warning" value="Reset">
                <input id="btnCancel" type="button" class="btn btn-primary" value="Cancel">
            </td>
        </tr>



            </tbody>
                    <input type="hidden" id="json" name="json" readonly>
                    <input type="hidden" id="json2" name="json2" readonly>
            <?php echo form_close() ?>
        </table>
        </div>

    </div>
</div>



<!-- include footer -->


<?php $this->load->view('partials/footer.html'); ?>

</body>


<script src="<?php base_url()?>vendor/js/registration.js"></script>


<script>


    var i = 2;

    function addrow() {

        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        var td3 = document.createElement("td");

        td1.setAttribute("colspan","2");

        var label = document.createElement("label");
        label.setAttribute("class","myLabel");
        label.setAttribute("style","margin-left:68px;margin-top:15px");

        var text = document.createTextNode("Name : ");
        label.appendChild(text);


        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("class","form-control");
        td1.setAttribute("id", "siblingName"+i);
        td1.appendChild(label);
        td1.appendChild(x);

        var label = document.createElement("label");
        label.setAttribute("class","myLabel");
        label.setAttribute("style","margin-left:68px;margin-top:15px");

        var text = document.createTextNode("School : ");
        label.appendChild(text);

        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("class","form-control");
        td2.setAttribute("id", "siblingSchool"+i);
        td2.appendChild(label);
        td2.appendChild(x);


        var label = document.createElement("label");
        label.setAttribute("class","myLabel");
        label.setAttribute("style","margin-left:68px;margin-top:15px");

        var text = document.createTextNode("Grade : ");
        label.appendChild(text);

        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("class","form-control");
        x.setAttribute("onkeyup","form-validateNumbers(this)");
        x.setAttribute("id","siblingGrade"+i);
        td3.setAttribute("id", "tdsiblingGrade"+i);
        td3.appendChild(label);
        td3.appendChild(x);


        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tbl2.appendChild(tr);

        i++;
    }



    var z = 2;

    function addrow2() {

        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");


        td1.setAttribute("colspan","2");

        var label = document.createElement("label");
        label.setAttribute("class","myLabel");
        label.setAttribute("style","margin-left:68px;margin-top:15px");

        var text = document.createTextNode("School Name : ");
        label.appendChild(text);


        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("class","form-control");
        td1.setAttribute("id", "lastSchoolName"+z);
        td1.appendChild(label);
        td1.appendChild(x);

        var label = document.createElement("label");
        label.setAttribute("class","myLabel");
        label.setAttribute("style","margin-left:68px;margin-top:15px");

        var text = document.createTextNode("Grade : ");
        label.appendChild(text);

        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("class","form-control");
        td2.setAttribute("id", "lastSchoolGrade"+z);
        td2.appendChild(label);
        td2.appendChild(x);




        tr.appendChild(td1);
        tr.appendChild(td2);

        tbl4.appendChild(tr);

        z++;
    }


    function submit1() {


        var newArray =[];
        var newArray2 =[];
        var y = (tbl2.childElementCount) ;
        var z = (tbl4.childElementCount) ;

        for(j=1;j<=y;j++){

            var name = document.getElementById("siblingName" + j).lastElementChild.value;
            var school = document.getElementById("siblingSchool" + j).lastElementChild.value;
            var grade = document.getElementById("tdsiblingGrade" + j).lastElementChild.value;

            var item = new Object();
            item.name = name;
            item.school = school;
            item.grade = grade;

            newArray.push(item);
        }

        for(k=1;k<=z;k++){

            var schoolname = document.getElementById("lastSchoolName" + k).lastElementChild.value;
            var lastgrade = document.getElementById("lastSchoolGrade" + k).lastElementChild.value;

            var item2 = new Object();
            item2.schoolname = schoolname;
            item2.lastgrade = lastgrade;


            newArray2.push(item2);

        }

        json.value = JSON.stringify(newArray);
        json2.value = JSON.stringify(newArray2);
        myform.submit();
    }
</script>

</html>