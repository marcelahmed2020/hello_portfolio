<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = \App\User::create([
           'name' => 'Dev Marcel',
           'email' => 'super_admin@app.com',
           'password' => bcrypt('123456'),
           'admin' => 3,
       ]);
       $user->attachRole('super_admin');
//        $admins = ['rami','marcel','waliam','ali','grard','tomas','abdo','Maz','Lina','Arc','Thon'];
//        foreach ($admins as $ad) {
//            $user = \App\User::create([
//                'name' =>  $ad.' admin',
//                'email' => $ad.'_admin@app.com',
//                'password' => bcrypt('123456'),
//                'admin' => 1,
//            ]);
//            $user->attachRole('admin');
//        }

  }
}
