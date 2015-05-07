<?php namespace App;

use Illuminate\Database\Eloquent\Model; 

class Radio extends Model{

	protected $fillable = ['name','email', 'telephone', 'address', 'logo_url', 'slogan'];

	public function promotions(){
		return $this->hasMany('App\Promotion');
	}

}

?>