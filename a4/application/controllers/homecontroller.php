<?php

class HomeController extends Controller{

	public function index(){
		$feed = "https://www.nasa.gov/rss/dyn/breaking_news.rss";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();


	$item_title = $feed_data->channel->item->title;
	$this->set('rss_title',$item_title);

	$item_desc = $feed_data->channel->item->description;
	$this->set('rss_desc',$item_desc);

	$item_date = $feed_data->channel->item->pubDate;
	$this->set('rss_date',$item_date);

	}

}

?>
