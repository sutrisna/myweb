<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faker extends CI_Controller {

    public function kategori() {
        $data = array(
            array(
                'jenis' => 'import'
            ),
            array(
                'jenis' => 'purchasing'
            ),
            array(
                'jenis' => 'iap'
            ),
            array(
                'jenis' => 'gudang'
            ),
            array(
                'jenis' => 'bd'
            ),
        );
        $this->db->insert_batch('kategori', $data);
        echo count($data) . " rows of fake data inserted!";
    }

    public function users() {
        // Load Faker
        $faker = Faker\Factory::create();

        // Daftar peran dan username
        $roles = [
            'admin' => 'admin',
            'superuser' => 'superuser',
            'import' => 'import',
            'purchasing' => 'purchasing',
            'iap' => 'iap',
            'gudang' => 'gudang',
            'bd' => 'bd'
        ];

        // Data pengguna palsu
        $data = [];
        foreach ($roles as $role => $username) {
            $data[] = [
                'username' => $username,
                'email' => $faker->unique()->email,
                'password' => password_hash($username, PASSWORD_BCRYPT), // Password sama dengan username
                'full_name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'role' => $role,
                'status' => 'active'
            ];
        }

        // Simpan ke database
        $this->db->insert_batch('users', $data);

        echo count($roles) . " rows of fake data inserted!";
    }
}
