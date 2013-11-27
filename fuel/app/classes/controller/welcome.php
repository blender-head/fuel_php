<?php

	class COntroller_Welcome extends Controller
	{
		public function action_index()
		{
			//$view = View::forge('hello_world');
			//$view->name = 'Andre';
			$view = View::forge('hello_world', array(
				'name' => 'Name'
			));
			
			return Response::forge($view); 
		}
	}