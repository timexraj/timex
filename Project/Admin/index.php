<?php require_once('lib/Session.php'); ?>
<?php require_once('lib/functions.php'); ?>
<?php require_once('lib/dal.php'); ?>
<?php require_once('lib/css_links.php'); ?>
</head>
<body>
<?php include('inc/navigation.php') ?>
<div class="container">
<?php echo session_mess(); ?>
		<table class="table table-hover table-bordered">
        <thead>
        		<tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Username</th>
                <th><center>Action</center></th>
          </tr>
          </thead>
          <?php $users=db_select("users");
		  			$s=1;
					while($row=mysqli_fetch_array($users)):?>
           <tbody>
           		<tr>
                <td><?php echo $s;?></td>
                <td><?php echo $row['fname'] . " " . $row['lname'];?></td>
                <td><a href="tel:<?php echo $row['phone'];?>"><?php echo $row['phone'];?></a></td>
                <td><?php echo $row['addr'];?></td>
                <td><a href="mailto:<?php echo $row['email'];?>"<?php echo $row['email']?></a></td>
                <td><?php echo $row['username'];?></td>
                <td><center><a href="delete.php?uid=<?php echo $row['id']?>"><i class="glyphicon glyphicon-trash" onClick="return confirm('Are You Sure want to proceed Deleting?')"></i></a>&nbsp;&nbsp;&nbsp;<a href="update.php?uid=<?php echo $row['id']?>"><i class="glyphicon glyphicon-edit"></i></a></center></td>
                </tr>
                </tbody>
                <?php $s++; endwhile ?>
             </table>
          </div>
          <?php include('inc/footer.php') ?>
              
                
