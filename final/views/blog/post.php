
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <br>
<?php
    if($u->isAdmin()) {
    ?>
    <button class="btn btn-primary"><a href="<?php echo BASE_URL?>manageposts/edit">Edit</a></button>
    <button class="btn btn-primary"><a href="<?php echo BASE_URL?>blog">Delete</a></button>
    <?php
    }
    ?>

<?php
  if($u->isRegistered()) {
    ?>

    <h2>View Comments</h2>
    <?php foreach($comment as $c){?>
      <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $c['uID'];?>" <?php echo $c['commentText'];?>"><?php echo $c['date'];?>"</a></h3>


      <?php }?>

      <form action="<?php echo BASE_URL?>blog/post<?php echo $task?>" method="POST" onsubmit="editor.post()">
        <textarea  class='form-control' id="textComment" name="textComment" value="Comments" placeholder="Comments" rows="3" style="width:75%;"></textarea>
            <br>
      <input type="submit" id='submitComment' class='btn btn-primary' value="Comment">

            </form>
        <?php
        }
          ?>


    </div>


<?php include('views/elements/footer.php');?>
