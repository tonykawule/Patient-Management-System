<?php include("../includes/connection.php"); ?>
<?php 
  #if(isset($_GET['q'])){
        
                #$doctorid = $_GET['q'];
                
                $sql = "select first_name, last_name, specialization, education from Doctor where doctor_id =1"; 
        
                $result = $conn->query($sql);
                $result = $result->fetch_assoc();
  #      }
?>
<?php
//echo "<script>alert('entered as'); </script>";
if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(isset($_POST['update']))
						{
							$id = 1;//$_SESSION['ID'];
	

		$target_dir = "images/";    //enter the destination
    echo "<script>alert($target_dir);</script>";
				$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" )
					{
						if (is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
							{        
								move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
							}
					}
   
	$firstname = $conn->escape_string($_POST['firstname']);
	$lastname = $conn->escape_string($_POST['lastname']);
	$address = $conn->escape_string($_POST['education']);
	$phone = $conn->escape_string($_POST['spec']);
	$aa= $firstname." ".$lastname." ".$address." ".$phone;
	echo "<script type='text/javascript'>alert('$aa');</script>";
	$sql = "update Patient set first_name = '$firstname', last_name = '$lastname' and address = '$address' and phone = '$phone' where P_id = '$id'";
	$conn->query($sql);
	
						}
				}	
?>


<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
  <script src = "../js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="star.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/material.min.js"></script>
  <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <!-- star rating js -->
  </head>
<body>
<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<div class = "mynav">
	 <nav class="navbar navbar-inverse navbar-fix navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../Departments.php">Departments</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../login-signup/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="../login-signup/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
      </div>
      </nav>
      </div>

<div class = "container" style="margin-top: 10%; margin-bottom: 10%; background-color: #EFF6F9; width: wrap-content; height: wrap-content; border-radius: 20px">
<div class = "container-fluid" style="margin-top: 5%; margin-bottom: 5%">
<h2><center><b>Edit profile information</b></center></h2><br>
	<div class = "col-sm-1"></div>
	<form action = "" method = "post"   enctype="multipart/form-data">
	<div class="col-sm-4">
		<img id = "blah" src="../Images/images/t3.jpg">
		<br><br><br>
		<input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);">	
	</div>
	
	<div class = "col-sm-1"></div>
	<div class = "col-sm-6">
		
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">First Name</label>
				<input type="text" class="form-control" name = 'firstname' value = <?php echo $result['first_name'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Last Name</label>
				<input type="text" class="form-control" name = 'lastname' value = <?php echo $result['last_name'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Education</label>
				<input type="text" class="form-control" name = 'education' value = <?php echo $result['education'] ?> >
			</div>
			<div class="form-group label-floating">
				<label class="control-label" style="font-size:1.2em">Specialization</label>
				<input type="text" class="form-control" name = "spec" value = <?php echo $result['specialization'] ?> >
			</div>
			<button type = 'submit' name='update' class="btn btn-info">Save Changes</button>
		
	</div>
	</form>
	</div>
</div>