	<div class="container">
<center><img src="images/Capturee3.JPG" alt="" width="350px" ></center><br><br>
	
	<button class="btn btn-primary" type="button"  onclick="openForm1()">
  <i class ="fa fa-plus"></i> Enter a New Department
  </button>

  
<div class="form-row" id="myForm">
  <!--<form action="/add.php" class="form-container">-->
    <h1>

<div class="form-group">
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Department Name</label>
  <input class="form-control form-control-sm" type="text" placeholder="Department Name" id="inputSmall">
</div>

<div class="form-group">
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Department phone</label>
  <input class="form-control form-control-sm" type="text" placeholder="Department Name" id="inputSmall">
</div>

<div class="form-group">
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Company name</label>
  <input class="form-control form-control-sm" type="text" placeholder="Company name" id="inputSmall">
</div>

<div class="form-group">
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Department Manager</label>
  <input class="form-control form-control-sm" type="text" placeholder="Department Manager" id="inputSmall">
</div>

<div class="form-group">
<label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Comments</label>
    <textarea class="form-control" name="family" rows="3"></textarea>
</div>

</h1>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
  </form>
</div>

<!-- ------------------------------------------------------------- -->
<script>
function openForm1() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a>
  <hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">S.L</th>
				<th class="text-center" scope="col">Department name</th>
				<th class="text-center" scope="col">Company name</th>
				<th class="text-center" scope="col">Phone</th>
				<th class="text-center" scope="col">View</th>
				<th class="text-center" scope="col">Edit</th>
				<th class="text-center" scope="col">Delete</th>
			</tr>
		</thead>

<!-- Modal content set up -->
   <!--     <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<center><img src="images\Capture1.jpg" width="500px" height="162px" alt=""></center>
        <h4 class="modal-title text-center">Set-up</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Name of the university</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter the name of the university" maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">University phone</label>
<input type="phone" class="form-control" name="user_phone" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
</div>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Current Semester</label>
<input type="text" class="form-control" name="card_no" placeholder="#" maxlength="12" required>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">University Departments</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter the name of the university" maxlength="12" required>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="fathername">University Director</label>
<input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="mothername">Teacher in charge</label>
<input type="text" class="form-control" name="user_mother" placeholder="Enter the teacher name">
</div>

	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
-->
        
			<?php
/*
        	$get_data = "SELECT * FROM card_activation order by 1 desc";
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				$sl = ++$i;
				$id = $row['id'];
				$u_card = $row['u_card'];
				$u_f_name = $row['u_f_name'];
				$u_l_name = $row['u_l_name'];
				$u_phone = $row['u_phone'];
				$u_family = $row['u_family'];
				$u_staff_id = $row['staff_id'];

        		$image = $row['image'];

        		echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-left'>$u_f_name   $u_l_name</td>
				<td class='text-left'>$u_card</td>
				<td class='text-left'>$u_phone</td>
				<td class='text-center'>$u_staff_id</td>
			
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

					     
					    
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					
						<a href='#' class='btn btn-danger deleteuser' title='Delete'>
						     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
        	}
			*/
        	?>

			
			
		</table>
	<!--	<form method="post" action="export.php">-->
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>


	<!---Add in modal---->

<!-- Modal 

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<center><img src="images\Capture2.jpg" width="300px" height="80px" alt=""></center>
        <h4 class="modal-title text-center">Departments Registration</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
			This is test for New Card Activate Form  
			 This is Address with email id  
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Department Name</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter University name" maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Company Name</label>
<input type="phone" class="form-control" name="user_phone" placeholder="Name of the university director" maxlength="10" required>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">First Name</label>
<input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="fathername">Father's Name</label>
<input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
</div>



<div class="form-row" style="color: skyblue;">
<div class="form-group col-md-6">
<label for="email">Email Id</label>
<input type="email" class="form-control" name="user_email" placeholder="Enter Email id">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Semester</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Gender</label>
<select id="inputState" name="user_gender" class="form-control">
  <option selected>Choose...</option>
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Date of Birth</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
</div>
</div>


<div class="form-group">
<label for="family">Comments</label>
    <textarea class="form-control" name="family" rows="3"></textarea>
</div>



<div class="form-group">
<label for="inputAddress">Village</label>
<input type="text" class="form-control" name="village" placeholder="1234 Main St">
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">District</label>
<input type="text" class="form-control" name="dist">
</div>
<div class="form-group col-md-4">
<label for="inputState">State</label>
<select name="state" class="form-control">
  <option selected>Choose...</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
</select>
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip</label>
<input type="text" class="form-control" name="pincode">
</div>
</div>

			


        	<div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		-->

<!--modalset-up

<div id="#myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

     Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<center><img src="images\Capture1.jpg" width="500px" height="162px" alt=""></center>
        <h4 class="modal-title text-center">Set-up</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Name of the university</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter the name of the university" maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">University phone</label>
<input type="phone" class="form-control" name="user_phone" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
</div>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Current Semester</label>
<input type="text" class="form-control" name="card_no" placeholder="#" maxlength="12" required>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">University Departments</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter the name of the university" maxlength="12" required>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="fathername">University Director</label>
<input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
</div>
<div class="form-group col-md-6">
<label for="mothername">Teacher in charge</label>
<input type="text" class="form-control" name="user_mother" placeholder="Enter the teacher name">
</div>

	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

		-->