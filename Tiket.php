<?php

// Kelas abstrak induk untuk semua jenis tiket studio
abstract class Tiket
{
    // Atribut global yang dipetakan dari kolom database
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $hargaDasarTiket;

    // Constructor untuk mengisi nilai properti dari database
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket)
    {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;

        // Kolom database harga_dasar_tiket dipetakan ke properti hargaDasarTiket
        $this->hargaDasarTiket = $harga_dasar_tiket;
    }

    // Getter untuk mengambil id tiket
    public function getIdTiket()
    {
        return $this->id_tiket;
    }

    // Getter untuk mengambil nama film
    public function getNamaFilm()
    {
        return $this->nama_film;
    }

    // Getter untuk mengambil jadwal tayang
    public function getJadwalTayang()
    {
        return $this->jadwal_tayang;
    }

    // Getter untuk mengambil jumlah kursi
    public function getJumlahKursi()
    {
        return $this->jumlah_kursi;
    }

    // Getter untuk mengambil harga dasar tiket
    public function getHargaDasarTiket()
    {
        return $this->hargaDasarTiket;
    }

    // Method abstrak untuk menghitung total harga tiket
    abstract public function hitungTotalHarga();

    // Method abstrak untuk menampilkan fasilitas sesuai jenis studio
    abstract public function tampilkanInfofasilitas();
}

?>