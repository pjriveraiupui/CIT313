<form id="comments_form" action="" method="post">

<fieldset>
<textarea id="comments" name="comments" style="width:500px;height: 200px"></textarea>
<br/>
<input type="hidden" name="pID" value="<?php echo $pID?>"/>
<input type="hidden" name="uID" value="<?php echo $uID?>"/>
<input type="hidden" name="commentID" value="<?php echo $commentID?>"/>
<button id="submit" type="submit" class="btn btn-primary">Submit</button></br>

</fieldset>
</form>
