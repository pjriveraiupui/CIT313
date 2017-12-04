<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Space Blog</h1>
  </div>
	<p>This site is about space!</p>
	<img class="img-responsive" src="views/img/space.jpg" alt="Earth Horizon">
	
	<h2>Latest from <?php echo $title;?></h2>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
