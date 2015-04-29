<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotions extends Model {

	protected $fillable = ['title', 'address', 'price', 'date', 'time', 'image_url'];

}
