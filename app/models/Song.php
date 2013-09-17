<?php

class Song extends Eloquent{
	
	/* Table used for this model */
	protected $table='songs';

	public function sender()
	{
	 
		return $this->belongs_to('Sender');
	
	}

	public add_song()
	{
		Input::all();
	}

	public function get_lyrics_by_author($criteria)
	{


	}

	public function get_lyrics_by_title($criteria)
	{

	}

	public function get_lyrics($criteria)
	{
		
	}

	public function get_last_ten()
	{

	}
}