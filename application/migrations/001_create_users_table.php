<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration {

    public function up()
    {
        $sql = "
            CREATE TABLE users (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            email VARCHAR(100) DEFAULT NULL,
            password VARCHAR(255) NOT NULL,
            full_name VARCHAR(100) DEFAULT NULL,
            phone_number VARCHAR(15) DEFAULT NULL UNIQUE,
            role ENUM('admin', 'import', 'superuser','purchasing','iap','gudang','bd') DEFAULT 'admin',
            status ENUM('active', 'inactive', 'banned') DEFAULT 'active',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        $this->db->query($sql);

        echo "Migrasi berhasil.\n";
    }

    public function down()
    {
        $this->dbforge->drop_table('users', TRUE);
        echo "Tabel berhasil dihapus.\n";
    }
}
