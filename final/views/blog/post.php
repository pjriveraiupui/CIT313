
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

        <h2><?php echo 'View Comments';?></br>
        <?php
        foreach($comments as $row) {
          echo $row['commentText']."<br><sub>Posted on ". $row['date']." by ".$row['first_name'].' '.$row['last_name'];
        }
        if($u->isRegistered()) {
          include ('views/elements/commentsform.php');
        }
          else { ?>
    			<a href="<?php echo BASE_URL;?>login/" class="btn btn-primary">Login</a>
          <?php } ?>


</div>
</div>
<?php include('views/elements/footer.php');?>
