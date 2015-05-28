<?php namespace App;

use Illuminate\Database\Eloquent\Model; 

class Radio extends Model{

	protected $fillable = ['name',
						   'email', 
						   'telephone', 
						   'address', 
						   'logo_url', 
						   'slogan',
						   'twitter',
						   'facebook',
						   'youtube',
						   'instagram',
						   'streaming_url'];

	public function promotions(){
		return $this->hasMany('App\Promotion');
	}

	public function user(){
		return $this->hasOne('App\User');
	}

}

?>