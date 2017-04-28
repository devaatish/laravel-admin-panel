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
        //
        $users = [
        					[
        						'name' => 'admin',
        						'email' => 'info@gmail.com',
        						'password' => bcrypt('p@ssw0rd'),
        						'is_admin' => '1'
        					],
        					  					
        			   ];
					   
		foreach($users as $key=>$value)
		{
			User::create($value);
		}	
        
    }
}
