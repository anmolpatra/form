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
<br/><br/>
<div class="container">
  <div class="row">
  	<div class="col-md-12 well text-center">
  		<h1>Input Form</h1>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-2"></div>
  	        <div class="col-md-8 well">
          		<form action="action/get_action.php" method="get">
                  <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" class="form-control">
                  </div>
                  <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                </form> <!-- Form End -->
          	</div><!-- Middle Col end -->
          	<div class="col-md-2"></div><!-- third col end -->
          </div> <!-- Row End -->
     </div><!-- Container End -->

</body>
</html>