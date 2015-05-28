<?php 
use Illuminate\Database\Seeder;
use App\OauthClient;
class OAuth2ClientsTableSeeder extends Seeder{
	public function run(){

		DB::table('oauth_clients')->delete();
		OAuthClient::create([
			'id' => 'HgPcsQZMNbs4k7Jcwgd8YutTHaNeb91oEJiYtoK0',
			'name' => 'testapp',
			'secret' => str_random(40)
		]);

	}
}

 ?>