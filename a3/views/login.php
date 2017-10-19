<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
	 <fieldset>
<legend>Log In</legend>
<form id="login_form" action="http://corsair.cs.iupui.edu:21941/CIT313/FA2017/a3//login/do_login" method="post">
<fieldset>
<label for="username">Username/E-mail Address: <font color="#FF0000">*</font></label>
<input type="text" id="email" name="email" value="" maxlength="50" required="username" />
<br />

<label for="password">Password: <font color="#FF0000">*</font></label>
<input type="password" class="txt" id="password" name="password" value="" maxlength="20" required="password" />
<br />

<br />

<button id="submit" type="submit" class="btn btn-primary" >Log In</button>
</fieldset>
   <?php echo $numbers ?>
  </div>
</div>
<?php include('elements/footer.php');?>
