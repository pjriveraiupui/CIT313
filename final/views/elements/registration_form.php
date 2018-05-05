<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<label for="first_name">First Name:</label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" required="first_name" />
<br>

<label for="last_name">Last Name: </label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" required="last_name" />
<br>

<label for="email">E-mail Address: </label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" required="email" />
<br>

<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" required="password" />

<label for="password">Confirm Password: </label>
<input type="password" class="txt" id="confirm_password" name="confirm_password" value="<?php echo $password;?>" required="password" />

<?php
if(($_POST["password"])!=($_POST["confirm_password"])){
    echo "Passwords did not match";
    
}
?>


<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<br>
<button id="submit" type="submit" >Sign Up</button>
</fieldset>
</form>
