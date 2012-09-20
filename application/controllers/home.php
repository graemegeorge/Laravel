<?php

class Home_Controller extends Base_Controller {

	public function action_index()
	{
		return View::make('home.index');
	}

	public function action_about()
	{
		return View::make('home.about');
	}


}