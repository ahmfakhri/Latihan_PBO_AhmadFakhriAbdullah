<?php

// Class Koneksi digunakan untuk menghubungkan project PHP dengan database
class Koneksi
{
    // Properti konfigurasi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_latihan_pbo_tpl1a_ahmadfakhriabdullah";

    // Properti untuk menyimpan hasil koneksi
    protected $conn;

    // Constructor akan otomatis dijalankan saat object Koneksi dibuat
    public function __construct()
    {
        // Membuat koneksi ke database menggunakan mysqli
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        // Mengecek apakah koneksi gagal
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    // Method untuk mengambil koneksi agar bisa dipakai di file lain
    public function getConnection()
    {
        return $this->conn;
    }
}

?>