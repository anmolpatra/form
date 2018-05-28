<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
   <div class="row">
   		<div class="col-md-12">
   			<?php
                if(isset($_GET['submit']))
                {
                    ?>
                    
                    <div class="alert alert-success text-center">
                      <strong>Success!</strong><?php echo "First Name: ".$first_name = $_GET['first_name']."<br>"; ?>
                    </div>
                    <div class="alert alert-success text-center">
                      <strong>Success!</strong><?php echo "Last Name: ".$last_name = $_GET['last_name']."<br>";?>
                    </div>
                    <?php 
                }
           ?>
   		</div>
   </div>
</div>

</body>
</html>
