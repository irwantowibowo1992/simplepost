<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'Irwanto',
      'email' => 'irwanto@gmail.com',
      'password' => bcrypt('irwanto'),
      'status' => true
    ]);
  }
}
