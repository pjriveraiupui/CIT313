<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Register</h1>

	 <?php if($message){?>
 	 <div class="alert alert-success">
 	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <?php echo $message?>
 	</div>
	<?php }?>

	<?php include ('views/elements/registration_form.php');
	 ?>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        var validator = $("#registration_form").validate({
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
                password: {
                    required: true
                },
                confirm_password: {
                    equalTo: "#password"
                }
            }
        });
    });
</script>
<?php include('views/elements/footer.php');?>
