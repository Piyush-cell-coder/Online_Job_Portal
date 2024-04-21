<?php

require_once('db.php');
$query = "select * from registrations";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Admin-Dashboard</title>
	<link rel="stylesheet"
		href="style2.css">
	<link rel="stylesheet"
		href="responsive.css">
</head>

<body> 
	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Dashboard</div>
			<img src= "pmgsy.png" class="icn menuicn" id="menuicn" alt="menu-icon" style="width:100px;height:70px;">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
		
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> Dashboard</h3>
					</div>

					<div class="nav-option option3">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report">
						<h3> Report</h3>
					</div>
          
					

					<div class="nav-option logout">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout">
						<!-- <h3>Logout</h3> -->
						<a href="index.php?logout='1'" style="color: black;">logout</a>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

		


			<div class="report-container">
				<div class="report-header">
					<h1 class="Total Enrolls">Total Enrolls</h1>
				</div>

				<table align="center" border="1px" text="dark" style="width:950px; line-height:50px;"> 
	<tr class="bg-dark text-white"> 


	        <th> Reg. No </th> 
			  <th> Name </th> 
			  <th> Gender </th>
			  <th> Email </th>
			  <th> Applied For </th>

		</tr> 
			  


					<tr>
						<?php
						
						while($row = mysqli_fetch_assoc($result))
						{
							?>

							<td><?php echo $row['reg_no'];?></td>
							<td><?php echo $row['fname'];?> <?php echo $row['mname']; ?>  <?php echo $row['lname']; ?>  </td>
							<td><?php echo $row['gender'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['position'];?></td>


					</tr>

							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
