<?php

class WeatherController extends Controller{



	public function index(){
		$xml = simplexml_load_file("");

		$this->set(weather,$xml);
	}

}
?>
