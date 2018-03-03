<?php
	include 'auth.php';

  $peopleId = $_GET['peopleId'];

  include 'dbConnect.php';

  $sql="SELECT * FROM people WHERE id='$peopleId'";
    $result = $conn->query($sql);
    if($result->num_rows <= 0){
      include 'dbDisconnect.php';
      return 'INVALID';
    }

    $row = $result->fetch_array();

?>

<!DOCTYPE html>
<html>
<head>
	<title>All Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">AddressBook</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="addContact.php">Add Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>

<div class="container">

  <h2>Add a Contact</h2>
  <hr/>
  <br>
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <form class="form-horizontal" action="editContactTm.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id'] ; ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname" value="<?php echo $row['fullName'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nname">nick Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nname" placeholder="Enter Nick Name" name="nname" value="<?php echo $row['nickName'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?php echo $row['address'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="bdate">Birth Date :</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="bdate" placeholder="Enter Date of Birth" name="bdate" value="<?php echo $row['birthDate'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter Mobile" name="phone" value="<?php echo $row['phone'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">Web Site:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="website" placeholder="Enter Website" name="website" value="<?php echo $row['webSite'] ?>">
      </div>
    </div>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div> 
  
  <div class="col-sm-2">
    
  </div>

</div>

</body>
</html>