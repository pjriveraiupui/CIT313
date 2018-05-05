<fieldset>
<legend>Update Profile</legend>
<label for="first_name">First Name: </label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" required="first_name"/>
<br />

<label for="last_name">Last Name: </label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" required="first_name"/>
<br />

<label for="email">E-mail Address: </label>
<input type="email" class="txt" id="email" name="email" value="<?php echo $email;?>" required="first_name"/>
<br />

<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password"/>

<br />

<label for="password">Confirm password: </label>
<input type="password" class="txt" id="confirm_password" name="confirm_password"/>

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Save</button>
</fieldset>
