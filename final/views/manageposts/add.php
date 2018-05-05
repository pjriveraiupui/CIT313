<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()" id="addpost">
          <label>Title</label>
          <input type="text" class="span6" name="title" value="<?php echo $title?>" required="title">

          <label for="date">Date</label>
          <?php // set timezone
date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>" required="date">

          <label for="category">Category</label>
          <select class="input-sm" name="category" id="category" required="category">
          <option value="">-- Select Category --</option>

          <?php
            foreach($categories as $key => $value){
              if($category == $key){
				  echo "<option selected value='".$key."'>".$value."</option>" . "\n";
              }
              else {
				  echo "<option value='".$key."'>".$value."</option>" . "\n";
              }

			}
          ?>

          </select>

          <label>Content</label>
          <textarea id="tinyeditor" name="content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>" required="content" />
					
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    var validator = $("#addpost").validate({
        ignore: '',
        rules: {
            title: {
                required: true
            },
            date: {
                required: true
            },
            category: {
                required: true
            },
            content: {
                required: true,
            }
        }
    });
});
</script>
<?php include('views/elements/footer.php');?>
