<?php ?>
    <h1> Members </h1>



    <?php if( is_array($users) ) {?>

    <div class="container">
    <div class="page-header">

    <h1><?php echo $title;?></h1>
      </div>

    	<?php foreach($users as $p){?>
        <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $p['first_name'];?>" title="<?php echo $p['last_name'];?>"><?php echo $p['email'];?></a></h3>
    	<p><?php echo $p['content'];?></p>
    <?php }?>
    </div>

    <?php include('elements/footer.php');?>
