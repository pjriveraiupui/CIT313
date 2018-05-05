<?php include('views/elements/header.php');?>
	<div class="container">
		<h1>Approve User</h1>
		<h2>Are you sure you want to approve this user?</h2>
		<p><?php echo $user['first_name']. " " .$user['last_name'];?></p>

        <div class="container">

            <a class="btn btn-primary" href="<?php echo BASE_URL?>manageusers/change/<?php echo $user['uID'];?>">Approve</a>
            <a class="btn" href="<?php echo BASE_URL?>manageusers/">Cancel</a>
        </div>
    </div>


<?php include('views/elements/footer.php');?>
