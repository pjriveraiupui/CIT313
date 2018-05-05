<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

        <h1><?php echo $title; ?></h1>
    </div>

    <?php if($message){?>
    <div class="alert alert-primary">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
    <?php }?>

    <div class="container">
    <?php
    foreach($users as $u){ ?>
      <div class="container">
		<h2><?php echo $u['first_name'];?></>
		<?php echo $u['last_name'];?></h2>
		<p><?php echo $u['email'];?></p>

    <div class="container">
		  <?php if ($u['active'] != '1') { ?><a class="btn btn-primary" href="<?php echo BASE_URL;?>manageusers/approve/<?php echo $u['uID'];?>">Approve</a>
		  <?php }?>
		  <?php if ($u['user_type'] == '2') { ?>
             <a class="btn btn-danger" href="<?php echo BASE_URL;?>manageusers/delete/<?php echo $u['uID']?>">Delete</a><br/>
            <?php }?>
			<?php echo $result?>

		</div>
    </div>
		</div>
    <?php } ?>

    </div>

</div>
<?php include('views/elements/footer.php');?>
