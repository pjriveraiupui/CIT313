<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://www.nba.com/rss/nba_rss.xml";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems(8);

		$item_head = $feed_data->channel->title;
		$this->set('rss_head',$item_head);

		$item_title = $feed_data->channel->item->title;
		$this->set('rss_title',$item_title);

		$item_desc = $feed_data->channel->item->description;
		$this->set('rss_desc',$item_desc);

		$item_date = $feed_data->channel->item->pubDate;
		$this->set('rss_date',$item_date);

		$item_link = $feed_data->channel->item->link;
		$this->set('rss_link',$item_link);



	}


}

?>
