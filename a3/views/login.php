<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Login</h1>

	 <form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

<fieldset>
<label for="username">Username: </label>
<input type="text" id="username" name="username" />
<br />

<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password"  />
<br />

<br />

<button id="submit" type="submit"> Log In</button>
</fieldset>
</form>
  </div>
</div>
<?php include('elements/footer.php');?>
