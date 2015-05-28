<?php 
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();
    User::create(array(
      'email' => 'info.momentodedios@gmail.com',
      'password' => Hash::make('123456'),
      'name' => 'Anthony',
      'radio_id' => 'HgPcsQZMNbs4k7Jcwgd8YutTHaNeb91oEJiYtoK0' //This client_id is only valid for demo purpose
    ));
  }

}
?>