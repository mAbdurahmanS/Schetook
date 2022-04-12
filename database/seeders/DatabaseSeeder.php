<?php

namespace Database\Seeders;

use App\Models\AbsenSiswa;
use App\Models\Attendance;
use App\Models\Category;
use App\Models\JamPelajaran;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Mapel;
use App\Models\Status;
use App\Models\TugasSiswa;
use App\Models\User;
use App\Models\Waktu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // AbsenSiswa::factory(10)->create();
        // JamPelajaran::factory(10)->create();
        // User::factory(10)->create();

        TugasSiswa::create([
            'title' => 'Tugas Matematika',
            'guru_id' => 10,
            'kelas_id' => 2,
            'desc' => 'berikan contoh kesimpulan dari sifat al-jabar',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'keterangan' => 'Submited'
        ]);

        TugasSiswa::create([
            'title' => 'Tugas Fisika',
            'guru_id' => 12,
            'kelas_id' => 1,
            'desc' => 'rangkum dari bab 12',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'keterangan' => 'Submited'
        ]);

        TugasSiswa::create([
            'title' => 'Tugas Kimia',
            'guru_id' => 12,
            'kelas_id' => 2,
            'desc' => 'buatlah rumus dari persamaan atom',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'keterangan' => 'UnSubmited'
        ]);

        TugasSiswa::create([
            'title' => 'Tugas Geografi',
            'guru_id' => 12,
            'kelas_id' => 5,
            'desc' => 'Rangkum point point dari video dilink terkait',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'keterangan' => 'UnSubmited'
        ]);

        TugasSiswa::create([
            'title' => 'Tugas Bahasa Indonesia',
            'guru_id' => 11,
            'kelas_id' => 5,
            'desc' => 'Buatlah 5 contoh sastra dari bab 2',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'keterangan' => 'Submited'
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'faza',
            'username' => 'abil4',
            'email' => 'abil4@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoD',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'kurnia',
            'username' => 'abil5',
            'email' => 'abil5@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'abil',
            'username' => 'abil6',
            'email' => 'abil6@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);
        
        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Ari',
            'username' => 'abil7',
            'email' => 'abil7@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Oktar',
            'username' => 'oktar1',
            'email' => 'oktar1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Dzaky',
            'username' => 'dzaky1',
            'email' => 'dzaky1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Eka',
            'username' => 'eka1',
            'email' => 'abil7@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Kholid',
            'username' => 'kholid1',
            'email' => 'kholid1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Badar',
            'username' => 'badar1',
            'email' => 'badar1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoE',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'sulisyo.S.pd',
            'username' => 'abil1',
            'email' => 'abil1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'Yanto',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'suyanto.S.pd',
            'username' => 'abil2',
            'email' => 'abil2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoB',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        User::create([
            'nisn' => mt_rand(10000000000,19999999999),
            'name' => 'Suritno.S.pd',
            'username' => 'abil3',
            'email' => 'abil3@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'Pria',
            'wali' => 'YantoC',
            'telpon' => mt_rand(80000000000,89999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, porro.',
            'level_id' => mt_rand(1,3),
            'kelas_id' => mt_rand(1,3),
        ]);

        JamPelajaran::create([
            'hari' => 'Senin',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 12
        ]);

        JamPelajaran::create([
            'hari' => 'Selasa',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 11
        ]);

        JamPelajaran::create([
            'hari' => 'Rabu',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 12
        ]);

        JamPelajaran::create([
            'hari' => 'Kamis',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 10
        ]);

        JamPelajaran::create([
            'hari' => 'Jum at',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 12
        ]);

        JamPelajaran::create([
            'hari' => 'Sabtu',
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => 11
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => mt_rand(1,9),
            'kelas_id' => mt_rand(1,6),
            'mapel_id' => mt_rand(1,7),
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 4,
            'kelas_id' => 1,
            'mapel_id' => 1,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'al-jabar bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 5,
            'kelas_id' => 4,
            'mapel_id' => 2,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'rangkuman sastra bab 12',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 6,
            'kelas_id' => 2,
            'mapel_id' => 3,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'rangkuman bab 8',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 5,
            'kelas_id' => 4,
            'mapel_id' => 5,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'rangkuman bab 2',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 6,
            'kelas_id' => 3,
            'mapel_id' => 3,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'rangkuman bab 4',
            'status_id' => mt_rand(1,3),
        ]);

        AbsenSiswa::create([
            'siswa_id' => 4,
            'kelas_id' => 5,
            'mapel_id' => 6,
            'waktu_id' => mt_rand(1,4),
            'nilai' => mt_rand(50,99),
            'keterangan' => 'rangkuman bab 9',
            'status_id' => mt_rand(1,3),
        ]);

        Status::create([
            'name' => 'Hadir'
        ]);

        Status::create([
            'name' => 'Izin'
        ]);

        Status::create([
            'name' => 'Alpha'
        ]);

        Waktu::create([
            'name' => '07.00 - 07.20'
        ]);

        Waktu::create([
            'name' => '07.20 - 08.00'
        ]);

        Waktu::create([
            'name' => '08.00 - 08.40'
        ]);

        Waktu::create([
            'name' => '08.40 - 09.00'
        ]);
        
        Waktu::create([
            'name' => '09.00 - 09.40'
        ]);

        Waktu::create([
            'name' => '09.40 - 10.20'
        ]);

        Waktu::create([
            'name' => '10.20 - 10.40'
        ]);

        Waktu::create([
            'name' => '10.40 - 11.20'
        ]);

        Waktu::create([
            'name' => '11.20 - 12.00'
        ]);

        Waktu::create([
            'name' => '12.00 - 13.00'
        ]);

        Jurusan::create([
            'name' => 'IPA',
            'slug' => 'ipa'
        ]);

        Jurusan::create([
            'name' => 'IPS',
            'slug' => 'ips'
        ]);

        Mapel::create([
            'name' => 'Matematika',
            'slug' => 'matematika'
        ]);

        Mapel::create([
            'name' => 'Bahasa Indonesia',
            'slug' => 'bahasa-indonesia'
        ]);

        Mapel::create([
            'name' => 'Biologi',
            'slug' => 'biologi'
        ]);

        Mapel::create([
            'name' => 'Fisika',
            'slug' => 'fisika'
        ]);

        Mapel::create([
            'name' => 'Kimia',
            'slug' => 'kimia'
        ]);

        Mapel::create([
            'name' => 'Geografi',
            'slug' => 'geografi'
        ]);

        Mapel::create([
            'name' => 'Ekonomi',
            'slug' => 'ekonomi'
        ]);

        Kelas::create([
            'name' => 'X IPA A',
            'slug' => 'x-ipa-a'
        ]);

        Kelas::create([
            'name' => 'X IPA B',
            'slug' => 'x-ipa-b'
        ]);

        Kelas::create([
            'name' => 'X IPA C',
            'slug' => 'x-ipa-c'
        ]);

        Kelas::create([
            'name' => 'X IPS A',
            'slug' => 'x-ips-a'
        ]);

        Kelas::create([
            'name' => 'X IPS B',
            'slug' => 'x-ips-b'
        ]);

        Kelas::create([
            'name' => 'X IPS C',
            'slug' => 'x-ips-c'
        ]);

        Level::create([
            'name' => 'admin',
            'slug' => 'admin'
        ]);

        Level::create([
            'name' => 'guru',
            'slug' => 'guru'
        ]);

        Level::create([
            'name' => 'siswa',
            'slug' => 'siswa'
        ]);
    }
}
