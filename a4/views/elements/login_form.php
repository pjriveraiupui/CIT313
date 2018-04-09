<form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

<fieldset>
<label for="username">Username: </label>
<input type="text" id="email" name="email" value="<?=$_POST['username']?>" />
<br />

<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password" value="<?=$_POST['password']?>" />
<br />

<br />

<button id="submit" type="submit"> Log In</button>
</fieldset>
</form>
</div>
</div>
