<?php 
use Illuminate\Database\Seeder;
use App\OauthClient;
class OAuth2ClientsTableSeeder extends Seeder{
	public function run(){

		DB::table('oauth_clients')->delete();
		OAuthClient::create([
			'id' => 'HgPcsQZMNbs4k7Jcwgd8YutTHaNeb91oEJiYtoK0', //This client_id is only valid for demo purpose
			'name' => 'testapp',
			'secret' => str_random(40)
		]);

	}
}

 ?>	