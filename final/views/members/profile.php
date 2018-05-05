<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Edit Profile</h1>

	 <?php if($message){?>
 	 <div class="alert alert-success">
 	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <?php echo $message?>
 	</div>
	<?php }?>
a
  <form id="profile_edit_form" action="<?php echo BASE_URL;?>members/update<?php echo $task?>" method="post">
    <?php include('views/elements/profile_edit_form.php'); ?>
  </form>
  <?php echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';?>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script>
  $(document).ready(function () {
      var validator = $("#profile_edit_form").validate({
          rules: {
              first_name: {
                  required: true
              },
              last_name: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              confirm_password: {
                  equalTo: "#password"
              }
          }
      });
  });
</script>

<?php include('views/elements/footer.php'); ?>
