<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'aaa','email' => 'aaa@test.com', 'password' => bcrypt('123456')],
            ['name' => 'bbb','email' => 'bbb@test.com', 'password' => bcrypt('123456')],
            ['name' => 'ccc','email' => 'ccc@test.com', 'password' => bcrypt('123456')],
            ['name' => 'ddd','email' => 'ddd@test.com', 'password' => bcrypt('123456')],
            ['name' => 'eee','email' => 'eee@test.com', 'password' => bcrypt('123456')],
            ['name' => 'fff','email' => 'fff@test.com', 'password' => bcrypt('123456')],
            ['name' => 'ggg','email' => 'ggg@test.com', 'password' => bcrypt('123456')],
            ['name' => 'hhh','email' => 'hhh@test.com', 'password' => bcrypt('123456')],
            ['name' => 'iii','email' => 'iii@test.com', 'password' => bcrypt('123456')],
            ['name' => 'jjj','email' => 'jjj@test.com', 'password' => bcrypt('123456')],
            ['name' => 'kkk','email' => 'kkk@test.com', 'password' => bcrypt('123456')],
            ['name' => 'lll','email' => 'lll@test.com', 'password' => bcrypt('123456')],
            ['name' => 'mmm','email' => 'mmm@test.com', 'password' => bcrypt('123456')],
            ['name' => 'nnn','email' => 'nnn@test.com', 'password' => bcrypt('123456')],
            ['name' => 'ppp','email' => 'ppp@test.com', 'password' => bcrypt('123456')],
            ['name' => 'qqq','email' => 'qqq@test.com', 'password' => bcrypt('123456')],
            ['name' => 'rrr','email' => 'rrr@test.com', 'password' => bcrypt('123456')],
            ['name' => 'sss','email' => 'sss@test.com', 'password' => bcrypt('123456')],
            ['name' => 'ttt','email' => 'ttt@test.com', 'password' => bcrypt('123456')],
            ['name' => 'uuu','email' => 'uuu@test.com', 'password' => bcrypt('123456')],
            ['name' => 'vvv','email' => 'vvv@test.com', 'password' => bcrypt('123456')],
            ['name' => 'www','email' => 'www@test.com', 'password' => bcrypt('123456')],
            ['name' => 'xxx','email' => 'xxx@test.com', 'password' => bcrypt('123456')],
            ['name' => 'yyy','email' => 'yyy@test.com', 'password' => bcrypt('123456')],
            ['name' => 'zzz','email' => 'zzz@test.com', 'password' => bcrypt('123456')],
        ];

        DB::table('users')->insert($users); 
    }
}
