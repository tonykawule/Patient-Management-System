<?php

        include("../includes/connection.php");

        session_start();
        
         if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 2){        
        
                

         }else{
         
         
             //   header('Location: ../index.php');
         }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "../js/jquery.min.js"></script>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
<script type="text/javascript" src = "../js/login.js"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
  
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
</head>
<body>


<div class = "container" style="margin-top: 8%">
  <div class="form">
    <div id="signup">   
      <form action="upload_pres.php" method="post" enctype="multipart/form-data">
      <h1 style="color:white">ADD A PRESCRIPTION</h1><br>
      <div class="field-wrap">
        <span id="message"></span>
        
		<img id = "blah" src="../Images/images/t3.jpg">
		<input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);"/>	
       
      </div>
      <div class="field-wrap">
        <label>
          Patient ID<span class="req">*</span>
        </label>
        <input type="text" name = "pid" id="pid" required autocomplete="off"/>
      </div>
      
      <div class="field-wrap">
        <label>
          Diagnosis<span class="req">*</span>
        </label>
        <input type="text" name="diagnosis"  required autocomplete="off"/>
      </div>
      <div class="field-wrap">
        <label>
          Prescription<span class="req">*</span>
        </label>
            <input type="text" name="pres" autocomplete="off"/>
      </div>
      
      
      <input type="submit" id = "buttonActivate" name = "Add" class="button button-block"/>
      </form>
      
                 
</div>
</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/login.js"></script>

</body>
</html>
