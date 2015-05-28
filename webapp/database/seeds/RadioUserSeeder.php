<?php 
use Illuminate\Database\Seeder;
use App\RadioUser;
class RadioUserSeeder extends Seeder{
	public function run(){
		DB::table('radio_user')->delete();
		RadioUser::create([
			'user_id' => 1,
			'radio_id' => 'HgPcsQZMNbs4k7Jcwgd8YutTHaNeb91oEJiYtoK0'
		]);
	}
}
?>