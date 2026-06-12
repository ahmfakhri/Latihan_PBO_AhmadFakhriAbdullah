<?php

require_once "Tiket.php";

class TiketVelvet extends Tiket
{
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantalSelimutPack, $layananButler)
    {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);

        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga()
    {
        $biayaTambahanVelvet = 50000;

        return ($this->hargaDasarTiket + $biayaTambahanVelvet) * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Bantal Selimut Pack: " . $this->bantalSelimutPack . ", Layanan Butler: " . $this->layananButler;
    }

    public function getBantalSelimutPack()
    {
        return $this->bantalSelimutPack;
    }

    public function getLayananButler()
    {
        return $this->layananButler;
    }
}

?>