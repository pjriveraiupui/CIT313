<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Register</h1>

   <form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

   <fieldset>
   <label for="first_name">First Name:</label>
   <input type="text" id="first_name" name="first_name"  />
   <br>

   <label for="last_name">Last Name: </label>
   <input type="text" class="txt" id="last_name" name="last_name" />
   <br>

   <label for="email">E-mail Address: </label>
   <input type="text" class="txt" id="email" name="email" />
   <br>

   <label for="password">Password: </label>
   <input type="password" class="txt" id="password" name="password"  />

   <br>
   <button id="submit" type="submit" >Sign Up</button>
   </fieldset>
   </form>



  </div>
</div>
<?php include('elements/footer.php');?>
