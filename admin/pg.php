<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admintable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        .th{
            	border=1px solid black;
        }
    </script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">
 <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vish.css">
    
    
    <style>
    .container{
        margin-top:10%;
        width:100%;
        margin-left:10%;
    }
</style>
</head>
<body>
   
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://roomsterinc.000webhostapp.com"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   
                        <li class="nav-items"><a class="nav-link" href="regs.php">Add hostel/Pg</a></li>
                        <!-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <li class="nav-item">
                            <button style="color:black;" class="btn btn-outline-success" type="submit">                               <?php 
                               if($status != "verified"){ echo "<a href='https://roomsterinc.000webhostapp.com/log.html".$link_address."'>Log-In</a>"; }
                               else{
                               echo "<a href='logout-user.php".$link_address."'>Log-Out</a>";} ?> </button>




                        </li>


                </ul>
            </div>
        </div>
    </nav>
       <br>
       <h2>Pending Requests : </h2>
       <hr style="weight=bolder;">
    <br>
    <table class="table">
        <thead>
			<tr>
					<th>ID</th>
				<th> Name</th>
				<th>Father Name</th>
				<th>Phone No.</th>
				<th>F.Phone No.</th>
                <th>Email</th>
                <th>Age</th>
				<th>Gender</th>
			
				<th>Address</th>
              
                <th>Profession</th>
                <th>File</tr>
		</thead>

        <tbody>
<?php
// read all row from database table
$sql = "SELECT * FROM pg where ownerid='vj941'";
$result = $con->query($sql);

if (!$result) {
    die("Invalid query: " . $con->error);
}

// read data of each row
while($row = mysqli_fetch_array($result)) { ?>
     <tr>
        <td><?php echo $id++; ?></td>
        <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['pno']; ?></td>
                    <td><?php echo $row['fpno']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                  
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['prof']; ?></td>



         <td><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
        
        <td>
           <a class='btn btn-primary btn-sm' href="acceptpg.php">Accept</a> 
              <a id="decline" class='btn btn-danger btn-sm' href="declinepg.php">Decline</a> 
        </td>
    </tr>
   
    <?php }
    $con->close();?>




</tbody>
</table>



<div class="container">
		<div class="col-md-6" style="margin-top: 50px;">
		  	<div class="form-group">
		    	<label for="exampleInputAadharCard">Aadhar Card No.</label>
		    	<input type="text" class="form-control" id="exampleInputAadharCard" placeholder="Enter Your Aadhar Card No." name="exampleInputAadharCard">
		    	<small id="message" class="form-text text-muted"></small>
		  	</div>
		  	<button type="button" class="btn btn-primary" onclick="verify()">Verify</button>
		</div>
	</div>
	
	<script type="text/javascript">
	// multiplication table
	const d = [
	    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
	    [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
	    [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
	    [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
	    [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
	    [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
	    [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
	    [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
	    [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
	    [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
	]

	// permutation table
	const p = [
	    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
	    [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
	    [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
	    [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
	    [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
	    [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
	    [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
	    [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
	]

	// validates Aadhar number received as string
	function validate(aadharNumber) {
	    let c = 0
	    let invertedArray = aadharNumber.split('').map(Number).reverse()

	    invertedArray.forEach((val, i) => {
	        c = d[c][p[(i % 8)][val]]
	    })

	    return (c === 0)
	}

	function verify() {
		var message = document.getElementById("message");
		var aadharNo = document.getElementById("exampleInputAadharCard").value;
		if(validate(aadharNo)) {
			message.innerHTML = 'Your aadhar card no. valid';
		} else {
			message.innerHTML = 'Your aadhar card no. not valid';
		}
	}
	</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
           integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
           crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
           integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
           crossorigin="anonymous"></script>
</body>

</html>

