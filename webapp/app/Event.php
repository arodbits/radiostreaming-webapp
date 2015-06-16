<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $fillable = ['title', 'address', 'price', 'date', 'time', 'image_url'];

	public function user() {
		return $this->belongsTo('App\Radio');
	}

}
