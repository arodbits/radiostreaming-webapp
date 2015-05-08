<?php 
use Illuminate\Database\Seeder;
use App\OauthClient;
class OAuth2ClientsTableSeeder extends Seeder{
	public function run(){

		DB::table('oauth_clients')->delete();
		OAuthClient::create([
			'id' => str_random(40),
			'name' => 'testapp',
			'secret' => str_random(40)
		]);

	}
}

 ?>