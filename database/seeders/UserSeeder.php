<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('bagianadmin123'),
                'role_id' => 1,
            ],
            [
                'username' => 'gudang',
                'email' => 'gudang@gmail.com',
                'password' => bcrypt('bagiangudang123'),
                'role_id' => 2,
            ],
            // Tambahkan data lainnya jika diperlukan
        ];
        foreach ($users as $user) {
            DB::table('users')->insertOrIgnore($user);
        }
    }
}
