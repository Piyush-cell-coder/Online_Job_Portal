<?php include('server2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ................ -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- ....................... -->
    <title>Job Application Form</title>
        <link href="https://fonts.googleapis.com/css?family=open+sans:400i" rel="stylesheet">
        <style>
            body{
                font-family:"Comic Sans MS",sans-serif;
                background-color:rgb(211, 204, 122);
                margin: 0;
            }
            h2{
                background-color: blueviolet;
                text-align: center;
                padding: 10px;
                color: honeydew;
            }
            td{
                padding: 7px;
            }
            input{
                height: 21px;
                border-radius: 10px;
                border: none;
            }
            input:focus, textarea:focus{
                outline: none;
                border: 1px solid forestgreen;
            }
            textarea{
                border-radius: 10px;
            }
            .button{
                background-color: forestgreen;
                color: white;
                font-size: 18px;
                padding: 0px 25px;
                border: none;
                margin-bottom: 30px;
            }
            .button:hover{
                cursor: pointer;
                box-shadow: 5px 5px 5px red;
            }
        </style>
        </head>
<body>

         <tr> <td><center><h1 bold>National Rural Development Agency</h1>
    <p>Ministry of Rural Development</p><img src="pmgsy.png" class="img-fluid" height="80px" width="80px"></center></td>
    <tr>

<h1 align="center">Job Application Form</h1>
<!-- <form><div id="personal-information"> -->
<form  method="post" enctype="multipart/form-data">
    <h2>Personal Information</h2>
    <table width="100%">
        <tr>
            <td>Position Applied For*</td>
            <td>
                <select name="position" required>
                <option value="">Select position</option>
                    <option>Intern(ICT)</option>
                    <option>Intern(Civil)</option>
                    <option>Young Civil Engineer</option>
                    <option>Data Scientist</option>
                    <option>Product Manager</option>
                    <option>Software Developer</option>
                    <option>Dupty Manager(civil)</option>
                    <option>Dupty Manager(ICT)</option>
                    </select>
            </td>
        <tr>
            <td>First Name*</td>
            <td>
                <input type="text" name="fname" size="25" required>
            </td>
            <td>Middle Name</td>
            <td>
                <input type="text" name="mname" size="25">
            </td>
            <td>Last Name</td>
            <td>
                <input type="text" name="lname" size="25">
            </td>
        </tr>
        <tr><td>Father's Name*</td>
            <td>
                <input type="text" size="25" name="fathername" required>
            </td>
            <td>Mother's Name*</td>
            <td>
                <input type="text" size="25" name="mothername" required>
            </td>
        </tr>
        <!-- <tr>
            <td>Current Address</td>
            <td>
                <textarea rows="5" cols="25"></textarea>
            </td>
            <td>Pearmanent Address</td>
            <td>
                <textarea rows="5" cols="25"></textarea>
            </td>
        </tr> -->
        <!-- <tr>
            <td>Phone Numbers</td>
        </tr>
        <tr>
            <td>Home Phone</td>
            <td><input type="text" size="25"></td> -->
        <tr>
            <td>Date Of Birth*</td>
            <td>
                <input type="date" name="dob" placeholder="dob" required>
            </td>
        </tr>
        <!-- <tr>
            <td colspan="2">Select Gender</td>
            <td>
                <input type="radio" name="Gender" value="male">Male
            </td>
            <td>
                <input type="radio" name="Gender" value="female">Female
            </td>
            <td>
                <input type="radio" name="Gender" value="female">Other
            </td>
        </tr> -->
        <tr>
            <td>Select Gender*</td>
            <td>
                <select required name="gender">
                <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </td>
        </tr>
        <td>Mobile Number*</td>
            <td>
                <input type="number" name="mobile" placeholder="Mobile No." required>
            </td>
        </tr>
        <tr>
            <td>Email ID*</td>
            <td><input type="email" name="email" maxlength="30" placeholder="Email" required/></td>
        </tr>
        <!-- <tr>
            <td>Highest Qualification</td>
            <td>
                <input type="text" size="25">
            </td>
            <td>Year Of Passing</td>
            <td>
                <input type="month">
            </td>
        </tr>
        <tr>
            <td colspan="2">Languages Known</td>

            <td>
                <input type="checkbox" value="oriya">Oriya
            </td>
            <td>
                <input type="checkbox" value="hindi">Hindi
            </td>
            <td>
                <input type="checkbox" value="english">English
            </td>
        </tr> -->
        <!-- <tr>
            <td colspan="2">Select Your Hobbies</td>

            <td>
                <input type="checkbox" value="eating">Eating
            </td>
            <td>
                <input type="checkbox" value="coding">Coding
            </td>
            <td>
                <input type="checkbox" value="sleeping">Sleeping
            </td>
        </tr> -->
        <!-- <tr>
            <td>About Your Self</td>
            <td colspan="3">
                <textarea rows="5" cols="50"></textarea>
            </td>
        </tr> -->
        <tr>
            <td>Category*</td>
            <td>
                <select name="category" required>
                <option value="">Select category</option>
                    <option>General</option>
                    <option>OBC</option>
                    <option>SC</option>
                    <option>ST</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nationality*</td>
            <td>
                <select name="nationality" required>
                <option value="">Select nationality</option>
                    <option>Indian</option>
                    <option>Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>AadharCard Number*</td>
            <td>
                <input type="number" name="uid_no" placeholder="Aadhar No." required>
            </td>
        </tr>
        <!-- ......................... -->
        <td>
        <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-12">
              <div class="form-group" style="float: right;">
                   <label class="lable"> Photo </label>
             <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
                <img id="output"  width="150" height="150" / style="display:none">
            </div>
          
              <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
          
          <script>
            var loadFile = function(event) {
              var reader = new FileReader();
              reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
              }; 
          
            $('#output').show();
              reader.readAsDataURL(event.target.files[0]);
            };
          </script>
            </div>
            </div>
            </div>  </td>
            

            <!-- ........... -->
    <td><div class="row">
        <div class="col-sm-12">
          <div class="form-group" style="float: right;">
             <label class="lable">Signature</label>
       <div style="border: 1px solid black; height: 120px; width: 150px;  background: #F5FAFF;">
          <img id="outputs"  width="150" height="120" / style="display:none">
      </div>
        <input type="file" id="simage" name="simage"  onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
    <script>
      var loadFiles = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('outputs');
          output.src = reader.result;
        }; 
    
      $('#outputs').show();
        reader.readAsDataURL(event.target.files[0]);
      };
    </script>
    </div></div></div></td>
        <!-- .................................... -->
    </table>
</div>
    <!-- Address Details -->
    <div id="address-details">
        <h2>Address Details</h2>
        <table width="100%">
            <tr>
            <td>Current Address*</td>
            <td>
                <textarea rows="5" cols="35" name="currentadd" required></textarea>
            </td>
            <td>Permanent Address*</td>
            <td>
                <textarea rows="5" cols="35" name="permanentadd" required></textarea>
            </td>
            </tr>
            
        </table>
    </div>

    <!--Education Details-->
    <div id="education-details">
        <h2>Education Details</h2>
        <table width="100%">
            <tr>
                <td>Sno</td>
                <td>Qualification</td>
                <td>Institute/University</td>
                <td>year Of Passing</td>
                <td>Marks(%)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Secondary*</td>
                <td>
                    <input type="text" size="25" name="highboard" required>
                </td>
                <td>
                    <input type="month" name="highyear" required>
                </td>
                <td>
                    <input type="number" min="0" max="100" name="highpercent" required>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Senior Secondary/Diploma*</td>
                <td>
                    <input type="text" size="25" name="interboard" required>
                </td>
                <td>
                    <input type="month" name="interyear" required>
                </td>
                <td>
                    <input type="number" min="0" max="100" name="interpercent" required>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Graduation*</td>
                <td>
                    <input type="text" size="25" name="graduationboard" required>
                </td>
                <td>
                    <input type="month" name="graduationyear" required>
                </td>
                <td>
                    <input type="number" min="0" max="100" name="graduationpercent" required>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Post Graduation</td>
                <td>
                    <input type="text" size="25" name="postboard">
                </td>
                <td>
                    <input type="month" name="postyear">
                </td>
                <td>
                    <input type="number" min="0" max="100" name="postpercent">
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Others</td>
                <td>
                    <input type="text" size="25" name="otherB">
                </td>
                <td>
                    <input type="month" name="otherY">
                </td>
                <td>
                    <input type="number" min="0" max="100" name="otherP">
                </td>
            </tr>
            <tr>
                <td>Upload CV*</td>

            <td><input type="file" id="file" name="resume" accept=".pdf" required></tr>
            </tr>
        </table>
    </div>
    <!---Work Experience 1-->
    <div id="work-exp-1">
        <h2>Work Experience 1</h2>
        <table width="100%">
            <tr>
                <td>Sno</td>
                <td>Organisation Name & Address</td>
                <td>Designation/Job Role</td>
                <td colspan="2">Duration(from-to)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <textarea rows="5" cols="30" name="organisation1"></textarea>
                </td>
                <td>
                    <textarea rows="5" cols="30" name="designation1"></textarea>
                </td>
                <td>
                    <input type="month" name="from1">
                </td>
                <td>
                    <input type="month" name="to1">
                </td>
            </tr>
        </table>
    </div>
    <!---Work Experience 2-->
    <div id="work-exp-2">
        <h2>Work Experience 2</h2>
        <table width="100%">
            <tr>
                <td>Sno</td>
                <td>Organisation Name & Address</td>
                <td>Designation/Job Role</td>
                <td colspan="2">Duration(from-to)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <textarea rows="5" cols="30" name="organisation2"></textarea>
                </td>
                <td>
                    <textarea rows="5" cols="30" name="designation2"></textarea>
                </td>
                <td>
                    <input type="month" name="from2">
                </td>
                <td>
                    <input type="month" name="to2">
                </td>
            </tr>
        </table>
    </div>
    <!---Work Experience 3-->
    <div id="work-exp-3">
        <h2>Work Experience 3</h2>
        <table width="100%">
            <tr>
                <td>Sno</td>
                <td>Organisation Name & Address</td>
                <td>Designation/Job Role</td>
                <td colspan="2">Duration(from-to)</td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <textarea rows="5" cols="30" name="organisation3"></textarea>
                </td>
                <td>
                    <textarea rows="5" cols="30" name="designation3"></textarea>
                </td>
                <td>
                    <input type="month" name="from3">
                </td>
                <td>
                    <input type="month" name="to3">
                </td>
            </tr>
            <p>Note : If more experiences,then merge into the same field</p>
        </table>
    </div>
    <!--Other Details-->
    <div id="other-details">
        <h2>Other Details</h2>
        <table width="100%">
            <tr>
				<td>Total Experience (In Years)</td>
				<td><input type="text" id="Choice1" size="2" name="totalexp" /></td>
			</tr>
            <td>Area of Interest</td>
            <td>
                <input type="text" size="45" name="interest">
            </td>
            <tr>
				<td>Knowledge of computer application, (if any):</td>
				<td><input type="radio" id="Choice1" name="compknow" value="Yes" /></td>
				<td><label for="radio">Yes</label></td>
				<td><input type="radio" id="Choice1" name="compknow" value="no" /></td>
				<td><label for="radio">No</label></td>
            </tr>
			<!-- <tr>
				<td><label for="superannuation">Date of superannuation/VRS</label></td>
            <td><input type="date" name="datevrs" id="date"></td>

			</tr>

			<tr>
                <td><label for="Knowledge">Designation and scale of pay at time of
					Superannuation/VRS </label></td>
				<td><input type="text" id="Choice1" name="designvrs" /></td>

			</tr>

			<tr>
                <td><label for="Penalty">Whether any penalty was Imposed during
					the service (if so give details) </label></td>
				<td><input type="radio" id="Choice1" name="penalty" value="Yes" /></td>
                <td><label for="radio">Yes</label></td>
                <td><input type="radio" id="Choice1" name="penalty" value="no" /></td>
                <td><label for="radio">No</label></td>
			</tr>

			<tr>
                <td><label for="serious disease">Whether the applicant is suffering from any
					serious disease if Yes provide details. </label></td>
				<td><input type="radio" id="Choice1" name="disease" value="Yes" /></td>
                <td><label for="radio">Yes</label></td>
                <td><input type="radio" id="Choice1" name="disease" value="no" /></td>
                <td><label for="radio">No</label></td>
			</tr> -->

			<tr>
                <td><label>
					Any other information you wish to add:
				</label></td>
                <td><textarea cols="40" rows="5" value="other" name="otherinfo"></textarea></td>
			</tr>
            <tr>
                <td>Additional Document you wish to add: </td>

            <td><input type="file" id="file" name="document1" accept=".pdf"></tr>
            </tr>

			<tr>
                <td>
                <input type="checkbox" name="checkbox" id="checkbox" required> I certify that the above information by me is true to the best of my knowledge and belief. I also agree that in the event of any mispresentation and/or falsification of information, my appointment shall be liable for termination without notice and without prejudice to any other 
                administrative/legal proceedings that -NRIDA may deem fit to initiate.</td>
			</tr>
            <tr>
                <td>Date*</td>
				<td><input type="date" name="datee" id="date" required></td>
            </tr>
            <td>Place*</td>
            <td>
                <input type="text" size="15" name="place" required>
            </td>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit" name="form_submit" class="button">
                </td>
                <td>
                    <input type="reset" value="reset" class="button">
                </td>
                <td></td>
                <td>
                <div>
                <button onclick = "window.location.href='index.php';">home 
                </div></td>
                <td></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>


