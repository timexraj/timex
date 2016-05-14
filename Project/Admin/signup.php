<?php require_once('lib/Session.php'); ?>
<?php require_once('lib/functions.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php include_once('inc/navigation.php'); ?>


<div class="container">
		<h1>Add New User</h1>
       <hr/>
       <?php
	   		$errors_sess=session_errors();
			echo form_error_output($errors_sess);
			?>
       <div class="col-md-6">
       		<form action="confirm.php" method="post">
            <div class="col-md-6 form-group">
            		<label>First Name</label>
                 <input type="text" name="firstname" placeholder="First Name" class="form-control">
             </div>
       <div class="col-md-6 form-group">
            		<label>Last Name</label>
                 <input type="text" name="lastname" placeholder="Last Name" class="form-control">
             </div>
       <div class="col-md-6 form-group">
            		<label>User</label>
                 <input type="text" name="username" placeholder="User Name" class="form-control">
             </div>
        <div class="col-md-6 form-group">
            		<label>Address</label>
                 <input type="text" name="address" placeholder="Address" class="form-control">
             </div>
         <div class="col-md-6 form-group">
            		<label>Email</label>
                 <input type="text" name="email" placeholder="Email" class="form-control">
             </div>
         <div class="col-md-6 form-group">
            		<label>Phone</label>
                 <input type="text" name="phone" placeholder="Phone Number" class="form-control">
             </div>
         <div class="col-md-6 form-group">
            		<label>Password</label>
                 <input type="password" name="password" placeholder="Password" class="form-control">
             </div>
         <div class="col-md-6 form-group">
            		<label>Re-Password</label>
                 <input type="password" name="cpass" placeholder="Retype Password" class="form-control">
             </div>
             
    <div class="col-md-6 form-group">
    		<label>Authentication Type</label>
          <select name="authentication" class="form-control">
          		<option value="">----Select Authentication----</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
         </div>
    <div class="col-md-6">
    		<label>&nbsp;</label>
         <input type="submit" name="adduser" value="Sign Up" class="btn btn-primary btn-block">
         </div>
         
         </form>
         </div>
      <div class="col-md-6">
      <div id="slider1_container" style="display:none; position:relative; margin: 0 auto; width: 500px; height:350px; overflow: hidden;">
      		<li><img src="img/bgn.jpg"></li>
            <li><img src="img/bgn.jpg"></li>
          </div>
          </div>
        </div>
        
        <?php include('inc/footer.php') ?>
        
    
             
             
</body>
</html>