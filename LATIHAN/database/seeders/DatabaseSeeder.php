<?php
namespace Database\Seeders;
<<<<<<< HEAD

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;
use Str;

=======
use DB;
use Hash;
use Illuminate\Database\Seeder;
>>>>>>> ce350605ab7ba9f1d37935772789681a1ab8c394
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        //insert data user
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        //insert data mahasiswa menggunakan query builder
        // DB::table('mahasiswa')->insert(
        //     [
        //         'npm' => '2009250055',
        //         'nama_mahasiswa' => 'Nur Rachmat',
        //         'tempat_lahir' => 'Paris',
        //         'tanggal_lahir' => '2000-01-01',
        //         'alamat' => 'Palembang',
        //         'created_at' => date("Y-m-d H:i:s")
        //     ]
        // );

        // DB::table('mahasiswa')
        //     ->where("npm", "2009250066")
        //     ->update(["npm" => "200920066P"]);

        Mahasiswa::insert(
            [
                'npm' => '2009250011',
                'nama_mahasiswa' => 'Nur Rachmat',
                'tempat_lahir' => 'Mumbai',
                'tanggal_lahir' => '2001-01-01',
                'alamat' => 'Palembang',
                'created_at' => date("Y-m-d H:i:s")
            ]);

        //retirve all data
        Mahasiswa::all(); //select * from mahasiswa
        Mahasiswa::where('id', '<', 3)->get(); //select * from mahasiswa where id < 3 
        Mahasiswa::select(['npm','nama'])->get(); //select npm, nama from mahasiswa 
=======
        // Menambahkan data ke tabel users
        DB::table("users")->insert([
            'name' => 'angel', 
            'email' => 'angel@gmail.com', // Pastikan email valid
            'password' => Hash::make("password") // Menggunakan Hash untuk password
        ]);
        // Mengupdate password untuk user dengan id 1
        DB::table("users")->where("id", 1)
            ->update([
                'password' => Hash::make("123456") // Menggunakan Hash untuk password
            ]);
        // Menghapus semua user dengan id lebih dari 1
        DB::table("users")->where("id", ">", 1)->delete();
>>>>>>> ce350605ab7ba9f1d37935772789681a1ab8c394
    }
}