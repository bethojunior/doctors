<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**suporte@fabrica704.com.br
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Betho',
                'email' => 'eu@betho.com',
                'phone' => '85994253764',
                'document' => '07377027371',
                'password' => Hash::make('admin12'),
                'user_status_id' => '2',
                'user_type_id' => '1',
            ]
        ]);
    }
}
