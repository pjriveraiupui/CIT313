<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
		<h1><?php echo $title;?></h1>
  </div>
<style>
	.sidebar {
	    float: right;
	    width: 20%;
	    display: block;
			padding: 10px;
	}
	.content {
	    display: block;
	    width: 70%;
	}
	</style>


	<div id="nba">
<img src="nba.jpg" width="100%" class="img  no-repeat center top" />
</div>

<div id="text">
<h3>Playoff season is here and this is the place for all your latest news from the league.</h3>
<br>
<div class="sidebar">
	<h2>Weather</h2>
	<form method="post" action="<?php echo BASE_URL?>weather/getresults"

		<label for "zip">Enter Your Zip Code</label>
		<input type="text" name="zip" id="zip" required="zip" />
		<br/>
		<button type="submit" class="btn btn-primary">Load Results</button>

	</form>
</div>
<div class="content">
	<h1>Latest from <?php echo $rss_head; ?></h1>
	<h3><a href=""><?php echo $rss_title;?></a></h3>
	<p><?php echo $rss_desc;?></p>
	<sub><?php echo $rss_date;?></sub>

</div>
</div>
</div>


<?php include('views/elements/footer.php');?>
