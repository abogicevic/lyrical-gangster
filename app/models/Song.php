<?php

class Song extends Eloquent{
	
	/* Table used for this model */
	protected $table='songs';

	public function sender()
	{
	 
		return $this->has_many('Song');
	
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