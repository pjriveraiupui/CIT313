<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Register </h1>


<form id="registration_form" action="http://corsair.cs.iupui.edu:21941/CIT313/FA2017/a3/register/add" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <font color="#FF0000">*</font></label>
<input type="text" id="first_name" name="first_name" value="" maxlength="20" required="first_name" />
<br />

<label for="last_name">Last Name: <font color="#FF0000">*</font></label>
<input type="text" class="txt" id="last_name" name="last_name" value="" maxlength="20" required="last_name" />
<br />

<label for="email">E-mail Address: <font color="#FF0000">*</font></label>
<input type="text" class="txt" id="email" name="email" value="" maxlength="100" required="email" />
<br />

<label for="password">Password: <font color="#FF0000">*</font></label>
<input type="password" class="txt" id="password" name="password" value="" maxlength="100" required="password" />

<br />

<input type="hidden" name="uID" value=""/>

<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form><p><a href="http://corsair.cs.iupui.edu:21941/CIT313/FA2017/a3/">Back to home page</a></p>

<?php include('elements/footer.php');?>
