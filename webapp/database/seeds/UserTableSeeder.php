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
      'name' => 'Anthony'
    ));
  }

}
?>