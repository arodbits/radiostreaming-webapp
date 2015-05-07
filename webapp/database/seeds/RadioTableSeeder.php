<?php 
use Illuminate\Database\Seeder;
use App\Radio;

class RadioTableSeeder extends Seeder{
	public function run(){
		DB::table('radios')->delete();
		Radio::create([
			'name' => 'Radio Proezas',
			'address' => 'Some address',
			'slogan' => 'En Cristo Podemos',
			'email' => 'info.momentodedios@gmail.com',
			'telephone' => '(999)-999-9999',
			'logo_url' => '2cdaf31.jpg',
 		]);
	}
}

?>