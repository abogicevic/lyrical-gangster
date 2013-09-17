<?php
class Author extends Eloquent{
	
	public function song()
	 {
	 return $this->has_many('Song');
	 }

}