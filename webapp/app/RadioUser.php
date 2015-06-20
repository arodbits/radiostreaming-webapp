<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadioUser extends Model
{

	protected $fillable = ["user_id", "radio_id"];
	protected $table = "radio_user";
}
