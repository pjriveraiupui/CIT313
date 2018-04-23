<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
  </div>
	<div id="nba">
<img src="nba.jpg" width="100%" class="img  no-repeat center top" />
</div>

<div id="text">
<h2>Playoff season is here and this is the place for all your latest news from the league.</h2>
<br>
	<h1>Latest from <?php echo $rss_head; ?></h1>
	<h3><a href=""><?php echo $rss_title;?></a></h3>
	<p><?php echo $rss_desc;?></p>
	<sub><?php echo $rss_date;?></sub>
</div>

<?php include('views/elements/footer.php');?>
